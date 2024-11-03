<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;

use App\Exports\BudgetsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\BudgetReportMail;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::all();
        return view('budgets.index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('budgets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'income' => 'required|numeric',
            'outcome' => 'required|numeric',
            'deposited_amount' => 'required|numeric',
            'event_date' => 'required|date',
        ]);

        auth()->user()->budgets()->create($request->all());

        return redirect()->route('budgets.index')->with('success', 'Budget created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Budget $budget)
    {
        return view('budgets.show', compact('budget'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Budget $budget)
    {
        return view('budgets.edit', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Budget $budget)
    {
        $request->validate([
            'event_name' => 'required',
            'income' => 'required|numeric',
            'outcome' => 'required|numeric',
            'deposited_amount' => 'required|numeric',
            'event_date' => 'required|date',
        ]);

        $budget->update($request->all());
        return redirect()->route('budgets.index')->with('success', 'Budget updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect()->route('budgets.index')->with('success', 'Budget deleted successfully.');
    }

    public function export(Request $request)
{
    // Validate the request data
    // $request->validate([
    //     'start_date' => 'required|date',
    //     'end_date' => 'required|date|after_or_equal:start_date',
    // ]);

    // $startDate = $request->input('start_date');
    // $endDate = $request->input('end_date');

    // return Excel::download(new BudgetsExport($startDate, $endDate), 'budgets_' . now()->format('Y_m_d') . '.xlsx');


// Assume $filePath is the path where the Excel report is generated
    $filePath = 'budget-reports/report.xlsx';

    if (Storage::exists($filePath)) {
        // Send the email with the attachment
        Mail::to($request->user()->email)->send(new BudgetReportMail($filePath));
    } else {
        return back()->with('error', 'The report file could not be found.');
    }

}
public function exportToEmail(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        //$email = $request->input('email');

        // Generate Excel file and save it temporarily
        $fileName = 'budget_report_' . now()->timestamp . '.xlsx';
        $filePath = 'exports/' . $fileName;
        Excel::store(new BudgetsExport($startDate, $endDate), $filePath, 'local');

       // Send email to the authenticated user
        Mail::to(auth()->user()->email)->send(new BudgetReportMail(Storage::path($filePath)));

        // Optionally delete the file after sending email
        Storage::delete($filePath);

         return back()->with('success', 'Budget report has been sent to your email.');
    }


}

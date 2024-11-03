<?php

namespace App\Exports;

use App\Models\Budget;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BudgetsExport implements FromCollection,WithHeadings
{
    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        return Budget::where('user_id', auth()->id())
        ->whereBetween('event_date', [$this->startDate, $this->endDate])
        ->get();
    }

    public function headings(): array
    {
        return [
            'Event Name',
            'Income',
            'Outcome',
            'Deposited Amount',
            'Event Date',
        ];
    }
}

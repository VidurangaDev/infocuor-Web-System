<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {

        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    public function create()
    {

        return view('documents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
        ]);


        $filePath = $request->file('file')->store('documents');


        Document::create([
            'title' => $request->input('title'),
            'file_path' => $filePath,
            'file_type' => $request->file('file')->getClientOriginalExtension(),
        ]);

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully.');
    }

    public function show(Document $document)
    {

        return Storage::download($document->file_path);
    }

    public function destroy(Document $document)
    {

        Storage::delete($document->file_path);

        
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Document deleted successfully.');
    }
}

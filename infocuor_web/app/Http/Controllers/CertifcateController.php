<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Barryvdh\DomPDF\Facade\Pdf;

class CertifcateController extends Controller
{
    public function generate(Member $member)
    {
        $pdf = Pdf::loadView('certificate', compact('member'));
        return $pdf->download('certificate_' . $member->name . '.pdf');
    }
}

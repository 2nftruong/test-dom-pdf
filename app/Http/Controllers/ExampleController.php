<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ExampleController extends Controller
{
    public function getPdf()
    {

        $pdf = PDF::loadView('pdf.index');
//        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'notosansregular']);
        return $pdf->download('note.pdf');

    }
}

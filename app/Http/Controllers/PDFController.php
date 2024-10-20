<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perkara;

class PDFController extends Controller
{
    //
    public function aktacerai ($id)
    {
        // $perkara = Perkara::all();
        $perkara = Perkara::FindOrFail($id);
        // $pdf = Pdf::loadView('akta-cerai', ['perkara' => $perkara]);
        $pdf = Pdf::loadView('akta-cerai', ['perkara' => $perkara]);


        // return $pdf->stream('test.pdf');
        return $pdf->download('akta-cerai.pdf');
    }
    public function salput ()
    {
        $perkara = Perkara::all();
        $pdf = Pdf::loadView('salinan-putusan', ['perkara' => $perkara]);


        // return $pdf->stream('test.pdf');
        return $pdf->download('salinan-putusan.pdf');
    }
}
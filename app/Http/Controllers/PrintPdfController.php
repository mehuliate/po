<?php

namespace App\Http\Controllers;

use App\Printables\PdfEksporSementara as PES;
use Illuminate\Http\Request;

class PrintPdfController extends Controller
{
    public function show(Request $request, $doc){

        $docType = $doc;
        switch ($docType) {
            case 'ekspor-sementara':
                $pdf = new PES();
                $pdf->generatePage();
                $pdf->Output('I', 'EksporSementara.pdf');
                exit;

            default:
                # code...
                break;
        }
    }
}

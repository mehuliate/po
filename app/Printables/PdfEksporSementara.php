<?php

namespace App\Printables;

use Fpdf\Fpdf;
use App\EksporSementara;

class PdfEksporSementara extends Fpdf
{
    protected $nama_kantor    = 'KANTOR PELAYANAN UTAMA BEA DAN CUKAI TIPE C SOEKARNO HATTA';
    protected $kode_kantor    = '050100';

    protected $jenis_penerimaan_negara    = 'IMPOR';

    public function __construct()
    {
        parent::__construct('P', 'mm', 'A4');
        $this->SetMargins(25, 15, 25);
        $this->SetAutoPageBreak(true, 14);
    }

    // static public function create() {
    //     $pdf = new PdfEksporSementara();
    //     $pdf->generatePage();
    //     return $pdf;
    // }

    public function generatePage(){
        $p = $this;
        // add new page
        $p->AddPage();
        $p->SetFont('Arial', '', 10);

        // current pos
        $currX  = $p->GetX();
        $currY  = $p->GetY();

        // KOP SURAT
        // output image

        $p->Image(__DIR__. '/logo_depkeu.png', null, null, 30, 30);

        $p->SetXY($currX + 17.5, $currY);

        $p->SetFont('Arial', '', 9);
        $p->Cell(0, 5, 'KEMENTERIAN KEUANGAN REPUBLIK INDONESIA', 0, 2);

        $p->SetFont('Arial', '', 8);
        $p->Cell(0, 5, 'DIREKTORAT JENDERAL BEA DAN CUKAI', 0, 2);

        $p->Cell(0, 5, 'Kantor     : ' . $this->nama_kantor, 0, 1);

        $p->Ln(1);
    }
}

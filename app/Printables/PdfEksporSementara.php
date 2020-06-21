<?php

namespace App\Printables;

use Fpdf\Fpdf;
use App\EksporSementara;

class PdfEksporSementara extends Fpdf
{
    protected $nama_kantor    = 'KANTOR PELAYANAN UTAMA BEA DAN CUKAI TIPE C SOEKARNO HATTA';
    protected $kode_kantor    = '050100';
    protected $alamat_kantor    = 'DAERAH PERGUDANGAN BANDARA SOEKARNO HATTA KOTAK POS -1023,CENGKARENG 19111'."\n".'TELEPON   : 5502056, 5502072  FAKSIMILI : 5502105, SITUS www.bcsoetta.net';
    protected $jenis_penerimaan_negara    = 'IMPOR';

    public function __construct()
    {
        parent::__construct('P', 'mm', 'A4');
        $this->SetTitle('Ekspor Sementara');
        $this->SetMargins(25, 15, 25);
        $this->SetAutoPageBreak(false, 15);
    }

    function MultiCellIndent($w, $h, $txt, $border=0, $align='J', $fill=false, $indent=0)
    {
        //Output text with automatic or explicit line breaks
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;

        $wFirst = $w-$indent;
        $wOther = $w;

        $wmaxFirst=($wFirst-2*$this->cMargin)*1000/$this->FontSize;
        $wmaxOther=($wOther-2*$this->cMargin)*1000/$this->FontSize;

        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $b=0;
        if($border)
        {
            if($border==1)
            {
                $border='LTRB';
                $b='LRT';
                $b2='LR';
            }
            else
            {
                $b2='';
                if(is_int(strpos($border,'L')))
                    $b2.='L';
                if(is_int(strpos($border,'R')))
                    $b2.='R';
                $b=is_int(strpos($border,'T')) ? $b2.'T' : $b2;
            }
        }
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $ns=0;
        $nl=1;
            $first=true;
        while($i<$nb)
        {
            //Get next character
            $c=$s[$i];
            if($c=="\n")
            {
                //Explicit line break
                if($this->ws>0)
                {
                    $this->ws=0;
                    $this->_out('0 Tw');
                }
                $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $ns=0;
                $nl++;
                if($border && $nl==2)
                    $b=$b2;
                continue;
            }
            if($c==' ')
            {
                $sep=$i;
                $ls=$l;
                $ns++;
            }
            $l+=$cw[$c];

            if ($first)
            {
                $wmax = $wmaxFirst;
                $w = $wFirst;
            }
            else
            {
                $wmax = $wmaxOther;
                $w = $wOther;
            }

            if($l>$wmax)
            {
                //Automatic line break
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                    if($this->ws>0)
                    {
                        $this->ws=0;
                        $this->_out('0 Tw');
                    }
                    $SaveX = $this->x; 
                    if ($first && $indent>0)
                    {
                        $this->SetX($this->x + $indent);
                        $first=false;
                    }
                    $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                        $this->SetX($SaveX);
                }
                else
                {
                    if($align=='J')
                    {
                        $this->ws=($ns>1) ? ($wmax-$ls)/1000*$this->FontSize/($ns-1) : 0;
                        $this->_out(sprintf('%.3f Tw',$this->ws*$this->k));
                    }
                    $SaveX = $this->x; 
                    if ($first && $indent>0)
                    {
                        $this->SetX($this->x + $indent);
                        $first=false;
                    }
                    $this->Cell($w,$h,substr($s,$j,$sep-$j),$b,2,$align,$fill);
                        $this->SetX($SaveX);
                    $i=$sep+1;
                }
                $sep=-1;
                $j=$i;
                $l=0;
                $ns=0;
                $nl++;
                if($border && $nl==2)
                    $b=$b2;
            }
            else
                $i++;
        }
        //Last chunk
        if($this->ws>0)
        {
            $this->ws=0;
            $this->_out('0 Tw');
        }
        if($border && is_int(strpos($border,'B')))
            $b.='B';
        $this->Cell($w,$h,substr($s,$j,$i),$b,2,$align,$fill);
        $this->x=$this->lMargin;
    }

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
        $tap=30;
        $p->SetXY($currX + $tap, $currY);
        $p->SetFont('Arial', 'B', 13);
        $p->Cell(0, 5, 'KEMENTERIAN KEUANGAN REPUBLIK INDONESIA', 0, 1,'C');
        $p->SetX($currX + $tap);
        $p->SetFont('Arial', 'B', 12);
        $p->Cell(0, 5, 'DIREKTORAT JENDERAL BEA DAN CUKAI', 0, 1,'C');
        $p->SetX($currX + $tap);
        $p->SetFont('Arial', 'B', 13);
        $p->MultiCell(0, 5, $this->nama_kantor, 0,'C');
        $p->SetX($currX + $tap);
        $p->SetFont('Arial', '', 7);
        $p->MultiCell(0, 4, $this->alamat_kantor, 0,'C');
        $p->ln(1);
        $currX  = $p->GetX();
        $currY  = $p->GetY();   
        $p->SetLineWidth(0.5);
        $p->Line($currX, $currY, 210-$currX, $currY);
        
        //nomor surat
        $p->ln(3);
        $currX  = $p->GetX();
        $currY  = $p->GetY();  
        $p->SetFont('Arial', '', 11);
        $p->Cell(20, 5, 'Nomor', 0, 0);
        $p->Cell(5, 5, ':', 0, 0);
        $p->Cell(100, 5, 'S-         /KPU.03/BD.0405/2020', 0, 0);
        $p->Cell(0, 5, '99 January 2020', 0, 1, 'R');

        $p->Cell(20, 5, 'Sifat', 0, 0);
        $p->Cell(5, 5, ':', 0, 0);
        $p->Cell(0, 5, 'Segera', 0, 1);

        $p->Cell(20, 5, 'Hal', 0, 0);
        $p->Cell(5, 5, ':', 0, 0);
        $p->Cell(0, 5, 'Persetujuan Ekspor Sementara Tujuan Perbaikan', 0, 1);

        $p->Cell(20, 5, 'Lampiran', 0, 0);
        $p->Cell(5, 5, ':', 0, 0);
        $p->Cell(0, 5, '-', 0, 1);

        //kepada
        $p->ln(4);
        $p->Cell(8, 5, 'Yth.', 0, 0);
        $p->Cell(0, 5, 'Pimpinan PT. IBM Indonesia', 0, 2);
        $p->MultiCell(0, 5, 'The Plaza Office Tower, Jl. MH Thamrin Kav. 28 - 30, Jakarta The Plaza Office Tower, Jl. MH Thamrin Kav. 28 - 30, Jakarta The Plaza Office Tower,', 0);
        
        //isi
        $p->ln(4);
        $p->MultiCellIndent(0, 5, 'Sehubungan dengan surat Saudara nomor 002/IBM-INV/II/2020 tanggal 27 Februari 2020 hal Permohonan Ekspor Sementara Tujuan Perbaikan, dengan ini disampaikan hal-hal sebagai berikut :', 0,'J',0,15);

        $p->ln(1);
        $p->Cell(8, 5, '1.', 0, 0);
        $p->Cell(0, 5, 'Bahwa Saudara mengajukan permohonan tersebut diatas dengan data sebagai berikut:', 0, 2);

        $currX  = $p->GetX();
        $b=7;
        $c=32;
        $p->Cell($b, 6, 'a.',0, 0);
        $p->Cell($c, 6, 'Nama Eksportir', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, 'PT. IBM Indonesia', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'b.', 0, 0);
        $p->Cell($c, 6, 'Jenis Barang', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, 'Sparepart Mesin ATM (PC, EPP-12, Card Reader, Escrow, UTR, CE Board, Tray Control, CSS, Cash Slot, Bill Validator, Printer, EPP CDM2)', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'c.', 0, 0);
        $p->Cell($c, 6, 'Jumlah', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, '94 pcs, 521kg', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'd.', 0, 0);
        $p->Cell($c, 6, 'Invoice No.', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, '7492020MD002 tanggal 26 Februari 2020', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'e.', 0, 0);
        $p->Cell($c, 6, 'Nilai Barang', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, 'USD 69,831.98', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'f.', 0, 0);
        $p->Cell($c, 6, 'Serial Number', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, 'Terlampir sesuai dengan invoice nomor 7492020MD002 tanggal 26 Februari 2020', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'g.', 0, 0);
        $p->Cell($c, 6, 'Negara Tujuan', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, 'Taiwan', 0);

        $p->SetX($currX);
        $p->Cell($b, 6, 'h.', 0, 0);
        $p->Cell($c, 6, 'Jangka Waktu', 0, 0);
        $p->Cell(5, 6, ':', 0, 0);
        $p->MultiCell(0, 6, '6 bulan', 0);

        $p->ln(1);
        $p->Cell(8, 5, '2.', 0, 0);
        $p->MultiCell(0, 6, 'Bahwa berdasarkan hasil penelitian dokumen diketahui barang yang diajukan ekspor sementara untuk tujuan dikembalikan setelah diperbaiki dan memiliki spesifikasi teknis berupa serial number sehingga dapat memudahkan identifikasi pada saat reimpor.', 0);

        $p->ln(1);
        $p->Cell(8, 5, '3.', 0, 0);
        $p->MultiCell(0, 6, 'Berkaitan hal-hal tersebut diatas permohonan Saudara mengajukan ekspor sementara untuk tujuan dikembalikan setelah diperbaiki dengan PEB jenis ekspor akan diimpor kembali dapat dilayani. Untuk selanjutnya Saudara dapat melakukan eksportasi dengan menggunakan PEB jenis ekspor untuk diimpor kembali', 0);

        $p->ln(1);
        $p->Cell(8, 5, '3.', 0, 0);
        $p->MultiCell(0, 6, 'Pada saat reimpor diharuskan menggunakan dokumen PIB.', 0);

        $p->ln(1);
        //tanda tangan
        //jika tinggi dari konten tanda tangan lebih besar dari sisa ruang yang tersedia maka kontent tanda tangan dipindahkan ke bawah(ada new page)
        //this page height = 297mm
        $page_height = 297;
        $height_of_cell = 51; // mm
        $bottom_margin = 15; // mm
        $space_left=$page_height-($p->GetY()+$bottom_margin);
        if ($height_of_cell > $space_left) {
            $p->AddPage(); // page break
        }
        $p->SetX($currX + 6);
        $p->MultiCell(0, 5, 'Demikian disampaikan untuk dimaklumi.',0);
        
        $p->ln(6);
        $a=100;
        $p->SetX($currX + $a);
        $p->Cell(0, 5, 'Kepala Kantor',0, 2);
        $p->Cell(0, 5, 'u.b.',0,2);
        $p->MultiCell(0, 5, 'Kepala Seksi Fasilitas Pabean dan Cukai II', 0);
        $p->ln(15);
        $p->SetX($currX + $a);
        $p->MultiCell(0, 5, 'Bekti Widysujarwanto', 0);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $kendaraan = Kendaraan::all();
 
    	$pdf = PDF::loadview('PDFKendaraan',['kendaraans'=>$kendaraan]);
    	return $pdf->download('laporan-pegawai-pdf');
    }
}

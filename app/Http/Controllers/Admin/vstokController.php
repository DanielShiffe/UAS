<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use admin\home\home;
use PDF;

class vstokController extends Controller
{
    public function cetak_pdf()
    {
    	$stok_produk = vstok::all();
 
    	$pdf = PDF::loadview('cetak_pdf',['stok_produk'=>$stok_produk]);
    	return $pdf->download('Stok-pdf');
    }
}

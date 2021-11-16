<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\faunasExport;
use App\Exports\faunapunahExport;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;

class cetakcontrol extends Controller
{
    public function cetakfauna(){
        $hewan= DB::table('t_b_fauna')
        ->leftJoin('t_b_provinsi', 't_b_provinsi.ID_provinsi', '=', 't_b_fauna.ID_provinsi')
        ->get();
        $dompdf = PDF::loadview('cetak.cetakfauna',['hewan'=>$hewan]);
$dompdf->setPaper('A4', 'landscape');
return $dompdf->stream('fauna.pdf');
    }

    public function faunaexel(){
        return Excel::download(new faunasExport, 'fauna.xlsx');
    }

    public function faunapunahexel(){
        return Excel::download(new faunapunahExport, 'fauna.xlsx');
    }
}

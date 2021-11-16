<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\faunamod;
use App\Models\t_b_fauna;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Mail\kirimemail;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Adapter\PDFLib;
use Dompdf\Dompdf;
use PDF;


class sijalakcontrol extends Controller
{
    // ini view
    public function index(){
        
        $p= DB::table('t_b_provinsi')->get()->count();
        $fp= DB::table('t_b_hewan_punah')->get()->count();
        $hewan= DB::table('t_b_fauna')->get()->count();
        $w= DB::table('t_b_wilayah')->get()->count();
        return view('konten.index',['user'=>$hewan],['provinsi'=>$p],['wilayah'=>$w],['punah'=>$fp]);
    }
    public function peta(){
        return view('konten.peta');
    }
    public function galeri(){
        return view('konten.galery');
    }
    public function provinsi(){
        $provinsi = DB::table('t_b_provinsi')->get();
        return view('konten.provinsi',['provinsi' => $provinsi]);
    }
    public function persebaran(){
        $persebaran = DB::table('t_b_persebaran')->get();
        return view('konten.persebaran',['persebaran' => $persebaran]);
    }
    public function wilayah(){
        $wilayah = DB::table('t_b_wilayah')
        ->leftJoin('t_b_provinsi', 't_b_provinsi.ID_provinsi', '=', 't_b_wilayah.ID_provinsi')
        ->leftJoin('t_b_fauna', 't_b_fauna.ID_fauna', '=', 't_b_wilayah.ID_fauna')
        ->get();
        return view('konten.wilayah',['wilayah' => $wilayah]);
    }
    public function laporan(){
        return view('konten.laporan');
    }
    public function hewan(){
        $hewan= DB::table('t_b_fauna')
        ->leftJoin('t_b_provinsi', 't_b_provinsi.ID_provinsi', '=', 't_b_fauna.ID_provinsi')
        ->get();
        return view('konten.hewan',['hewan'=>$hewan]);
    //     $hewan = DB::table('t_b_fauna')->get();
    //     return view('konten.hewan',['hewan' => $hewan]);
    }
    public function user(){
        $hewan= User::latest()->get();
        return view('template.sidebar',['user'=>$hewan]);
    //     $hewan = DB::table('t_b_fauna')->get();
    //     return view('konten.hewan',['hewan' => $hewan]);
    }
    public function hewan_punah(){
        $hewan_punah = DB::table('t_b_hewan_punah')->get();
        return view('konten.hewan_punah',['hewan_punah' => $hewan_punah]);
    }
    // ini hapus

    public function hapusprovinsi($id){
        DB::table('t_b_provinsi')->where('ID_provinsi',$id)->delete();
        return redirect('/dataprovinsi');
    }
    public function hapuspersebaran($id){
        DB::table('t_b_persebaran')->where('ID_persebaran',$id)->delete();
        return redirect('datapersebaran');
    }
    public function hapuswilayah($id){
        DB::table('t_b_wilayah')->where('ID_wilayah',$id)->delete();
        return redirect('datawilayah');
    }
    public function hapuslaporan(){
        return view('konten.laporan');
    }
    public function hapushewan($id){
        DB::table('t_b_fauna')->where('ID_fauna',$id)->delete();
        return redirect('datahewan');
    }
    public function hapushewan_punah($id){
        DB::table('t_b_hewan_punah')->where('ID_fauna_punah',$id)->delete();
        return redirect('fauna_punah');
    }

    
}

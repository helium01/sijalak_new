<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\t_b_fauna;
use App\Models\t_b_provinsi;

class postcontrol extends Controller
{
    public function fauna(){
        $a=DB::table('t_b_provinsi')->get();
        return view('data.fauna',['provinsi'=>$a]);
    }
    public function provinsi(){
        return view('data.provinsi');
    }
    public function faunapunah(){
        return view('data.fauna_punah');
    }
    public function wilayah(){
        $b=DB::table('t_b_provinsi')->get();
        $a=DB::table('t_b_fauna')->get();
        return view('data.wilayah',['fauna'=>$a],['provinsi'=>$b]);
    }
    public function persebaran(){
        return view('data.persebaran');
    }
    public function faunapost(Request $request){
        
            $ft=$request->foto;
            $newft=rand(0000,9999).'.'.$ft->getClientOriginalExtension();
            $vid=$request->video;
            $newvid=rand(0000,9999).'.'.$vid->getClientOriginalExtension();
            $fauna=new t_b_fauna;
            $fauna->ID_fauna=$request->id_fauna;
            $fauna->nama_fauna=$request->nama_fauna;
            $fauna->jenis_fauna=$request->jenis_fauna;
            $fauna->endemikdi=$request->endemik;
            $fauna->jumlah_populasi=$request->jumlah_populasi;
            $fauna->ID_provinsi=$request->id;
            $fauna->foto=$newft;
            $fauna->video=$newvid;
            $ft->move(public_path().'/img',$newft);
            $vid->move(public_path().'/vid',$newvid);
            $fauna->save();
        
        return redirect('/datahewan');
        
    }
    public function persebaranpost(Request $request){
        DB::table('t_b_persebaran')->insert([
            'ID_persebaran'=>$request->id_persebaran,
            'garis_persebaran'=>$request->garis_persebaran,
            'jenis_hewan'=>$request->jenis,
            'Meliputi_Provinsi'=>$request->meliputi
        ]);
        return redirect('/datapersebaran');
    }
    public function provinsipost(Request $request){
       
        DB::table('t_b_provinsi')->insert([
            'ID_provinsi'=>$request->id_provinsi,
            'Nama'=>$request->nama,
            'koordinat'=>$request->koordinat,
            'jenis_hewan'=>$request->jenis_hewan
        ]);
        return redirect('/dataprovinsi');
    }
    public function faunapunahpost(Request $request){
        DB::table('t_b_hewan_punah')->insert([
            'ID_fauna_punah'=>$request->id_fauna_punah,
            'ID_fauna'=>$request->id_fauna,
            'Nama'=>$request->nama,
            'endemik'=>$request->endemik,
            'catatan_kaki'=>$request->catatan_kaki
        ]);
        return redirect('/fauna_punah');
    }
    public function wilayahpost(Request $request){
        DB::table('t_b_wilayah')->insert([
            'ID_wilayah'=>$request->id_wilayah,
            'nama_wilayah'=>$request->nama,
            'karakteristik_wilayah'=>$request->karakteristik,
            'ID_provinsi'=>$request->id_provinsi,
            'ID_fauna'=>$request->id_fauna
        ]);
        return redirect('/datawilayah');
    }
    // untuk edit
    public function editpersebaran($id){
        $persebaran=DB::table('t_b_persebaran')->where('ID_persebaran',$id)->get();
        $a=DB::table('t_b_provinsi')->get();
        return view('edit.persebaran',['editpersebaran'=>$persebaran],['provinsi'=>$a]);
    }
    public function editwilayah($id){
        $wilayah=DB::table('t_b_wilayah')->where('ID_wilayah',$id)->get();
        $fauna= DB::table('t_b_fauna')->get();
        $a=DB::table('t_b_provinsi')->get();
        return view('edit.wilayah',['editwilayah'=>$wilayah],['provinsi'=>$a],['editfauna'=>$fauna]);
    }
    public function editprovinsi($id){
        $fauna= DB::table('t_b_fauna')->get();
        $wilayah=DB::table('t_b_provinsi')->where('ID_provinsi',$id)->get();
        return view('edit.provinsi',['editprovinsi'=>$wilayah],['fauna'=>$fauna]);
    }
    public function edithewan($id){
       $fauna= DB::table('t_b_fauna')->where('ID_fauna',$id)->get();
       $provinsi= DB::table('t_b_provinsi')->get();
        return view('edit.fauna',['editfauna'=>$fauna],['provinsi'=>$provinsi]);
    }
    public function edithewan_punah($id){
        $hewanpunah=DB::table('t_b_hewan_punah')->where('ID_fauna_punah',$id)->get();
        return view('edit.fauna_punah',['edithewan_punah'=>$hewanpunah]);
    }
    public function faunaedit(Request $request,$id){
        // dd($request);
        // $fauna= t_b_fauna::where('ID_fauna',$id);
        $ft=$request->foto;
            $newft=rand(1111,9999).'.'.$ft->getClientOriginalExtension();
            $vid=$request->video;
            $newvid=rand(1111,9999).'.'.$vid->getClientOriginalExtension();
            DB::table('t_b_fauna')->where('ID_fauna',$id)->update([
            'ID_fauna'=>$request->id_fauna,
           'nama_fauna'=>$request->nama_fauna,
            'jenis_fauna'=>$request->jenis_fauna,
             'endemikdi'=>$request->endemik,
            'jumlah_populasi'=>$request->jumlah_populasi,
            'ID_provinsi'=>$request->id,
            'foto'=>$newft,
            'video'=>$newvid
            ]);
            $ft->move(public_path().'/img',$newft);
            $vid->move(public_path().'/vid',$newvid);
        return redirect('/datahewan');
    }
    public function persebaranedit(Request $request,$id){
        // dd($request);
        DB::table('t_b_persebaran')->where('ID_persebaran',$id)->update([
            'ID_persebaran'=>$request->ID_persebaran,
            'garis_persebaran'=>$request->garis_persebaran,
            'jenis_hewan'=>$request->jenis_hewan,
            'Meliputi_Provinsi'=>$request->Meliputi_Provinsi
            // $request->all()
        ]);
        return redirect('/datapersebaran');
    }
    public function provinsiedit(Request $request,$id){
        DB::table('t_b_provinsi')->where('ID_provinsi',$id)->update([
            'ID_provinsi'=>$request->id_provinsi,
            'nama'=>$request->nama,
            'koordinat'=>$request->koordinat,
            'jenis_hewan'=>$request->jenis_hewan
        ]);
        return redirect('/dataprovinsi');
    }
    public function faunapunahedit(Request $request,$id){
        DB::table('t_b_hewan_punah')->where('ID_fauna_punah',$id)->update([
            'ID_fauna_punah'=>$request->id_fauna_punah,
            'ID_fauna'=>$request->id_fauna,
            'Nama'=>$request->nama,
            'endemik'=>$request->endemik,
            'catatan_kaki'=>$request->catatan_kaki
        ]);
        return redirect('/fauna_punah');
    }
    public function wilayahedit(Request $request,$id){
        DB::table('t_b_wilayah')->where('ID_wilayah',$id)->update([
            'ID_wilayah'=>$request->id_wilayah,
            'nama_wilayah'=>$request->nama,
            'karakteristik_wilayah'=>$request->karakteristik,
            'ID_provinsi'=>$request->id_provinsi,
            'ID_fauna'=>$request->id_fauna
        ]);
        return redirect('/datawilayah');
    }
    

}

<?php

use App\Http\Controllers\sijalakcontrol;
use App\Http\Controllers\cetakcontrol;
use App\Http\Controllers\logincontrol;
use App\Http\Controllers\postcontrol;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/cetakfauna',[cetakcontrol::class,'cetakfauna']);
route::get('/cetakfaunaex',[cetakcontrol::class,'faunaexel']);
route::get('/cetakfaunapunahex',[cetakcontrol::class,'faunapunahexel']);
Route::get('/login', [logincontrol::class,'index'])->name('login');
Route::post('/loginpost', [logincontrol::class,'indexpost'])->name('loginpost');
Route::get('/logout', [logincontrol::class,'logout'])->name('logout');
//isi konten
route::group(['middleware'=>['auth']],function(){
    Route::get('/', [sijalakcontrol::class,'index'])->name('home');
    route::get('/peta',[sijalakcontrol::class,'peta'])->name('peta');
    route::get('/fauna_punah',[sijalakcontrol::class,'hewan_punah'])->name('fauna_punah');
    Route::get('/dataprovinsi', [sijalakcontrol::class,'provinsi'])->name('provinsi');
    route::get('/datapersebaran',[sijalakcontrol::class,'persebaran'])->name('persebaran');
    route::get('/datawilayah',[sijalakcontrol::class,'wilayah'])->name('wilayah');
    route::get('/datahewan',[sijalakcontrol::class,'hewan'])->name('hewan');
    // untuk tampilan upload data
    route::get('/upload/fauna',[postcontrol::class,'fauna'])->name('upload_fauna');
    route::get('/laporan',[sijalakcontrol::class,'laporan'])->name('laporan');
    route::post('/laporanpost',[sijalakcontrol::class,'laporanpost'])->name('laporanpost');
    route::get('/upload/provinsi',[postcontrol::class,'provinsi'])->name('upload_provinsi');
    route::get('/upload/faunapunah',[postcontrol::class,'faunapunah'])->name('upload_faunapunah');
    route::get('/upload/wilayah',[postcontrol::class,'wilayah'])->name('upload_wilayah');
    route::get('/upload/persebaran',[postcontrol::class,'persebaran'])->name('upload_persebaran');
    // untuk post
    route::post('/upload/postpersebaran',[postcontrol::class,'persebaranpost'])->name('upload_persebaranpost');
    route::post('/upload/postfauna',[postcontrol::class,'faunapost'])->name('upload_faunapost');
    route::post('/upload/postprovinsi',[postcontrol::class,'provinsipost'])->name('upload_provinsipost');
    route::post('/upload/postfaunapunah',[postcontrol::class,'faunapunahpost'])->name('upload_faunapunahpost');
    route::post('/upload/postwilayah',[postcontrol::class,'wilayahpost'])->name('upload_wilayahpost');
    // untuk route delete
    route::get('/fauna_punah/{id}',[sijalakcontrol::class,'hapushewan_punah'])->name('hapusfauna_punah');
    Route::get('/dataprofinsi/{id}', [sijalakcontrol::class,'hapusprovinsi'])->name('hapusprovinsi');
    route::get('/datapersebaran/{id}',[sijalakcontrol::class,'hapuspersebaran'])->name('hapuspersebaran');
    route::get('/datawilayah/{id}',[sijalakcontrol::class,'hapuswilayah'])->name('hapuswilayah');
    route::get('/datahewan/{id}',[sijalakcontrol::class,'hapushewan'])->name('hapushewan');
    // untuk edit
    route::get('/fauna_punah/edit/{id}',[postcontrol::class,'edithewan_punah'])->name('editfauna_punah');
    route::get('/datapersebaran/edit/{id}',[postcontrol::class,'editpersebaran'])->name('editpersebaran');
    Route::get('/dataprofinsi/edit/{id}', [postcontrol::class,'editprovinsi'])->name('editprovinsi');
    route::get('/datawilayah/edit/{id}',[postcontrol::class,'editwilayah'])->name('editwilayah');
    route::get('/datahewan/edit/{id}',[postcontrol::class,'edithewan'])->name('edithewan');
    // post edit 
    route::post('/fauna_punah/update/{id}',[postcontrol::class,'faunapunahedit'])->name('fp');
    route::post('/datapersebaran/update/{id}',[postcontrol::class,'persebaranedit'])->name('dp');
    Route::post('/dataprofinsi/update/{id}', [postcontrol::class,'provinsiedit'])->name('dpf');
    route::post('/datawilayah/update/{id}',[postcontrol::class,'wilayahedit'])->name('dw');
    route::post('/datahewan/update/{id}',[postcontrol::class,'faunaedit'])->name('dh');
    // untuk view api
    route::view('/apiprov','data.apiprov')->name('api');
    route::view('/idapiprov','data.idapiprov')->name('idapi');
});


route::view('/coba','edit.provinsi');

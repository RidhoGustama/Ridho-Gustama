<?php

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

Route::get('/LAGU MIRJUTT', function () {
    return ('remirza genjer, rada sedeng saetik');
}); 
Route::get('/LAGU PAUJAN', function () {
    return ('Demi cinta wujudkan sebuah harapan

    Namun ku rasa cukup ku menunggu
    
    Semua rasa tlah hilang
    
     
    
    Sekarang aku tersadar
    
    Cinta yang ku tunggu tak kunjung datang
    
    Apalah arti aku menunggu
    
    Bila kamu tak cinta lagi
    
     
    
    Namun ku rasa cukup ku menunggu
    
    Semua rasa tlah hilang
    
     
    
    Sekarang aku tersadar
    
    Cinta yang ku tunggu tak kunjung datang
    
    Apalah arti aku menunggu
    
    Bila kamu tak cinta lagi
    
     
    
    Dahulu kaulah segalanya
    
    Dahulu hanya dirimu yang ada di hatiku
    
    Namun sekarang aku mengerti
    
    Tak perlu ku menunggu sebuah cinta yang sama
    
     
    
    Sekarang aku tersadar
    
    Cinta yang ku tunggu tak kunjung datang
    
    Apalah arti aku menunggu
    
    Bila kamu tak cinta lagi
    
     
    
    Sekarang aku tersadar
    
    Cinta yang ku tunggu tak kunjung datang
    
    Apalah arti aku menunggu
    
    Bila kamu tak cinta lagi');
});
Route::get('/LAGU AKAS', function () {
    return ('Tak sengaja lewat depan rumahmu
    Ku melihat ada tenda biru
    Dihiasi indahnya janur kuning
    Hati bertanya, "Pernikahan siapa?"
    Tak percaya, tapi ini terjadi
    Kau bersanding duduk di pelaminan
    Air mata jatuh tak tertahankan
    Kau khianati cinta suci ini
    Tanpa undangan, diriku kau lupakan
    Tanpa putusan, diriku kau tinggalkan
    Tanpa bicara, kau buatku kecewa
    Tanpa berdosa, kau buatku merana
    Ku tak percaya, dirimu tega
    Nodai cinta, khianati cinta
    Tak percaya, tapi ini terjadi
    Kau bersanding duduk di pelaminan
    Air mata jatuh tak tertahankan
    Kau khianati cinta suci ini
    Tanpa undangan, diriku kau lupakan
    Tanpa putusan, diriku kau tinggalkan
    Tanpa bicara, kau buatku kecewa
    Tanpa berdosa, kau buatku merana
    Ku tak percaya, dirimu tega
    Nodai cinta, khianati cinta
    Tanpa undangan, diriku kau lupakan
    Tanpa putusan, diriku kau tinggalkan
    Tanpa bicara, kau buatku kecewa
    Tanpa berdosa, kau buatku merana
    Ku tak percaya, dirimu tega
    Nodai cinta, khianati cinta
    Ku tak percaya, dirimu tega
    Nodai cinta, khianati cinta');
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
    });
route::get('/siswa/smkbpi/rpl',function(){
    echo '<h2 style="text-align :center"><u>welcome to 11 rpl</u></h2>';
});
Route::get('/siswa/{ridho}', function ($ridho) {
    return "Tampilkan data siswa bernama $ridho";
});
route::get('/stok_barang/{MOUSE}/{logitech}',function ($jenis,$merek){
return "cek sisa stok untuk $jenis $merek";
});
route::get('/profile', function (){
    return view ('profile');
});

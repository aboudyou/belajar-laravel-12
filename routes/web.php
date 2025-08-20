<?php

use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('pages.beranda');
});
route::get('/about', function (){
    return view('pages.about',[
        'nama' => 'syifa hafidz',
        'umur'=>20,
        'alamat'=>'indonesia'
    ]);
});

route::view('/contact', 'pages.contact');

// satu controller banyak method
Route::get('/product', [ProdukController::class, 'index']); //read data menampilkan produk
Route::get('/product/tambah', [ProdukController::class, 'tambahProduk']);
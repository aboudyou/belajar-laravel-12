<?php

use Illuminate\Support\Facades\Route;

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
route::get('/about/{id}',function($id){
    return view('pages.detail',[
        'nomer'=>$id
    ]);
});
route::view('/contact', 'pages.contact');
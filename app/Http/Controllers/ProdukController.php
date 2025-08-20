<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
       $toko= [
           'nama_toko' => 'Sumber Makmur',
           'alamat' => 'Bandung, Jawa Barat',
           'type' =>'Ruko'
         ];
       $produk = produk::get();// query untuk menganmbil semua data yang berada di tb_produk
      // $queryBuilder = DB::table('tb_produk')->get();// query untuk semua data yang berada di tb_produk
       return view('pages.produk.show',[
        'toko' =>$toko,
        'produk' => $produk
       ]);

    }      
    
    public function tambahProduk(){
        return view('pages.addproduk');
    }
}
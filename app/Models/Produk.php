<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Controller
{
    //inisialisasi model produk
    protected $table = 'id_produk'; 

    //inisialisasi primary key di dalam model
    protected $primaryKey = 'id_produk';

    //inisialisasi data yang dapat kita isi
    //protected $fillable = ['nama_produk', 'harga', 'stok'];
    //inisialisasi data yang tidak boleh kita isi
    protected $guarded = ['id_produk'];
}

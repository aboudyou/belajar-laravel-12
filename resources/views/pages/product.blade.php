@extends('layouts.master')

@section('konten')
  <h1>Daftar produk kami</h1>
  <hr>
  <a href="/product/tambah" class="btn btn-primary mb-3">Tambah Data</a>
  <div class="alert alert-primary">
      <b>Nama Produk :</b> {{$nama_toko}}
      <br>
      <b>Alamat :</b> {{$alamat}}
      <br> 
      <b>Tipe Toko :</b> {{$tipe}}
</div>
<div class="card">
  <div class="card-header">
    Daftar Produk
  </div>

  <div class="card-body">
    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
  </tbody>
</table>
  </div>
</div>
@endsection
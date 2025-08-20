@extends('layouts.master')

@section('konten')
  <h1>Daftar produk kami</h1>
  <hr>
  <a href="/product/tambah" class="btn btn-primary mb-3">Tambah Data</a>
  <div class="alert alert-primary">
      <b>Nama Toko :</b> {{$toko['nama_toko']}}
      <br>
      <b>Alamat :</b> {{$toko['alamat']}}
      <br> 
      <b>Tipe Toko :</b> {{$toko['type']}}
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
      <th scope="col">Haarga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produk as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->nama_produk}}</td>
      <td>{{$item->harga}}</td>
      <td>{{$item->deskripsi_produk}}</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
@endsection
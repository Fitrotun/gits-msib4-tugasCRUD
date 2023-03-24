@extends('layout')
@section('konten')


<h6><b> Kategori Produk </b></h6>
<hr>
<div class="btn">
<a href="{{ url('/penjualan/tambah') }}">
    <button type="button" class="btn btn-primary mt-3">Tambah Kategori Produk</button>
</a>
</div>
@foreach ($kategori as $item)

<div class="container">
<div class="row">
  <div class="col-sm-3 mt-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title"><b>
          {{ $item->nama }}
          </b></div>
          <br>
          <br>
                <a href="/penjualan/kategori/{{ $item->id}}/edit">
                <button type="button" class="btn btn-warning">Edit</button>
          </a>
          <a href="/penjualan/kategori/{{ $item->id}}/delete">
                <button type="button" class="btn btn-danger">Hapus</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  @endforeach
@endsection
@extends('layout')
@section('konten')
<h3>Halaman Login</h3>
<hr>
<br>
<div class="col-md-4 mx-auto my-5">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control " name="email" id="email" type="text" placeholder="Silahkan Masukkan Email Anda" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" type="text" placeholder="Silahkan Masukkan Password Anda">
                </div>
                <a href="/penjualan/home" rel="noopener noreferrer" class="btn btn-primary"> Login</a>
            </form>
        </div>
    </div>
</div>
@endsection



@extends('layouts.app')
@section('content')
<h1>Hubungi Kami</h1>
<div class="row mt-3">
    <div class="col-md-6">
        <form>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email aktif Anda">
            </div>
            <div class="mb-3">
                <label>Pesan</label>
                <textarea class="form-control" rows="5" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            <button class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <div class="col-md-6">
        <h5>Alamat</h5>
        <p>Jl. Sepatu No. 123, Jakarta<br>Telp: 0812-3456-7890<br>Email: info@tokosepatu.com</p>
        <iframe class="rounded shadow-sm w-100" height="250" src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<h1>Form Pengaduan Layanan</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ups!</strong> Ada kesalahan saat pengisian.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('layanan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
    </div>

    <div class="mb-3">
        <label>Email Aktif</label>
        <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
    </div>

    <div class="mb-3">
        <label>Isi Pengaduan</label>
        <textarea name="deskripsi" class="form-control" rows="5" placeholder="Tulis pengaduan Anda di sini..." required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
    <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
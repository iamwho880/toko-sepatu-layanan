@extends('layouts.app')
@section('content')
<h1>Edit Pengaduan</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ups!</strong> Ada kesalahan dalam pengisian.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $layanan->nama) }}" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $layanan->email) }}" required>
    </div>

    <div class="mb-3">
        <label>Isi Pengaduan</label>
        <textarea name="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
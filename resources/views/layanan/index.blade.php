@extends('layouts.app')
@section('content')
<h1>Daftar Pengaduan Layanan</h1>

<a href="{{ route('layanan.create') }}" class="btn btn-success mb-3">+ Buat Pengaduan Baru</a>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi Pengaduan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($layanans as $layanan)
        <tr>
            <td>{{ $layanan->nama }}</td>
            <td>{{ $layanan->email }}</td>
            <td>{{ $layanan->deskripsi }}</td>
            <td>
                <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Belum ada pengaduan.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
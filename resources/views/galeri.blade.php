@extends('layouts.app')
@section('content')
<h1>Galeri Sepatu</h1>
<div class="row">
    @for ($i = 1; $i <= 6; $i++)
        <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1532873626-62910b6145fb?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D{{ $i }}" class="card-img-top" alt="sepatu {{ $i }}">
            <div class="card-body">
                <p class="card-text">Koleksi Sepatu {{ $i }}</p>
            </div>
        </div>
</div>
@endfor
</div>
@endsection
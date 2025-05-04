@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Profil Toko Sepatu Kami</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-light">
                <img src="https://sombrero.jdsports.id/media/mageplaza/blog/post/b/l/blog_banner_sepatu_putih_1920x840.jpg" class="card-img-top rounded" alt="Toko Sepatu">
                <div class="card-body">
                    <h5 class="card-title">Tentang Kami</h5>
                    <p class="card-text">
                        Toko Sepatu adalah tempat terbaik untuk mendapatkan sepatu berkualitas dengan harga terbaik. Kami menawarkan berbagai jenis sepatu untuk berbagai kebutuhan, mulai dari sepatu olahraga, fashion, hingga sepatu casual untuk sehari-hari.
                    </p>
                    <p class="card-text">
                        Sejak berdiri pada tahun 2020, kami telah melayani pelanggan di seluruh Indonesia dengan pelayanan yang ramah dan profesional. Kami berkomitmen untuk memberikan produk berkualitas dan pengalaman berbelanja yang menyenangkan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <h3>Visi & Misi Kami</h3>
        <p class="text-muted">Kami berusaha menjadi toko sepatu pilihan utama di Indonesia, dengan menyediakan berbagai pilihan sepatu yang dapat memenuhi setiap kebutuhan pelanggan.</p>

        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="card shadow-sm border-light">
                    <div class="card-body">
                        <h5 class="card-title">Visi Kami</h5>
                        <p class="card-text">Menjadi toko sepatu terdepan yang dikenal dengan kualitas produk dan layanan terbaik.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card shadow-sm border-light">
                    <div class="card-body">
                        <h5 class="card-title">Misi Kami</h5>
                        <p class="card-text">Memberikan produk sepatu berkualitas dengan harga yang bersaing, serta pelayanan pelanggan yang ramah dan cepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
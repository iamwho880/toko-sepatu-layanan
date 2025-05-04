@extends('layouts.app')
@section('content')

<div class="container text-center mt-5">
    <h1 class="display-4 fw-bold">Selamat Datang di Toko Sepatu Kami!</h1>
    <p class="lead text-muted mb-5">Temukan sepatu terbaik dengan kualitas premium dan harga terjangkau hanya di toko kami.</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1615670319396-d2ce67c79abd?q=80&w=2658&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded shadow-lg" alt="Sepatu Toko">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-light">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBDHK_TSD8Zb4ft2Hl1Er1Nx2iM5YOK4Q7eQ&s" class="card-img-top" alt="Sepatu Olahraga">
                <div class="card-body">
                    <h5 class="card-title">Sepatu Olahraga</h5>
                    <p class="card-text">Temukan sepatu olahraga berkualitas tinggi untuk kenyamanan maksimal saat beraktivitas.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-light">
                <img src="https://dynamic.zacdn.com/DEZmasqFFkPc3-kpr-EiqfDjcTU=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hipzo-3283-5516123-1.jpg" class="card-img-top" alt="Sepatu Fashion">
                <div class="card-body">
                    <h5 class="card-title">Sepatu Fashion</h5>
                    <p class="card-text">Gaya dan kenyamanan, pilih sepatu fashion terbaru yang cocok untuk penampilanmu.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-light">
                <img src="https://s.alicdn.com/@sc04/kf/Hf540c121f92944639ffdcb2fe6c13708A.jpg_720x720q50.jpg" class="card-img-top" alt="Sepatu Casual">
                <div class="card-body">
                    <h5 class="card-title">Sepatu Casual</h5>
                    <p class="card-text">Nikmati kenyamanan sepatu casual untuk penggunaan sehari-hari dengan desain modern.</p>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
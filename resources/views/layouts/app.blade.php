<!DOCTYPE html>
<html>

<head>
    <title>Toko Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Toko Sepatu</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('beranda') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="{{ route('profil') }}" class="nav-link">Profil</a></li>
                <li class="nav-item"><a href="{{ route('layanan.index') }}" class="nav-link">Layanan</a></li>
                <li class="nav-item"><a href="{{ route('galeri') }}" class="nav-link">Galeri</a></li>
                <li class="nav-item"><a href="{{ route('kontak') }}" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>
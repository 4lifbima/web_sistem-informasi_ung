<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HMB-TI | Himpunan Mahasiwa Teknik Informatika</title>
        <link rel="shortcut icon" href="{{ asset('assets/images/bonebolango.jpg')}}" type="image/x-icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    </head>
    <body>
        
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/images/logo.png')}}" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">prestasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Galerry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Kontak</a>
        </li>
    
      </ul>
      <form class="d-flex" >
        <button class="btn btn-danger">Register</button>
      </form>
    </div>
  </div>
</nav>

{{-- hero --}}
 <section id="hero" style="padding: 100px 0;">
 <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Kiri -->
            <div class="col-md-6 text-white">
                <h1 class="text-bold">Selamat Datang di SDN Negeri 9 Tilong Kabila</h1>
                <p class="lead">Menjadi sekolah yang berkomitmen pada pendidikan berkualitas untuk menciptakan generasi yang cerdas, berbudi pekerti, dan berdaya saing.</p>
                <a href="#about" class="btn btn-danger mt-2">show more</a>
            </div>

            <!-- Kolom Kanan (Gambar) -->
            <div class="col-md-6">
                <img src="{{ asset('assets/images/icon.png') }}" class="img-fluid rounded" alt="Sekolah SDN Negeri 9 Tilong Kabila" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>
 </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

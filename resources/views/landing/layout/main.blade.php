<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPAA | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg me-4 mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="./assets/images/logo.svg" width="250px" height="107px" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto fw-semibold" style="font-size:16px">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} me-4" aria-current="page" href="/">BERANDA</a>
            <a class="nav-link {{ Request::is('aduan') || Request::is('prosedur') ? 'active' : '' }} me-4" href="/aduan">DAFTAR ADUAN</a>
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }} me-4" href="/about">TENTANG KAMI</a>
            <a class="nav-link {{ Request::is('faq') ? 'active' : '' }}" href="/faq">FAQ</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container my-3">
      @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-primary px-4 py-5 fw-semibold" style="font-size: 15px">
      <div class="row">
        <div class="col-md-3 d-flex flex-column text-center my-auto">
          <img src="assets/images/landing/banyumas.png" alt="Logo Banyumas" width="100px" class="mx-auto mb-3">
          <p>Pemerintah Kabupaten Banyumas</p>
          <p>Dinas Pengendalian Penduduk dan Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak Kabupaten Banyumas (DPPKBP3A Kabupaten Banyumas)</p>
          <p>Bidang Pemberdaya Perempuan</p>
        </div>
        <div class="col-md-5 ps-4">
          <p class="mb-1">Alamat DPPKBP3A Kabupaten Banyumas :</p>
          <p class="mb-1">Jl. DR. Soeparno No.24 Purwokerto Wetan, Grendeng, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53111</p>
          <p class="mb-1">No. HP :</p>
          <p class="mb-1">(0280) 625893</p>
          <p class="mb-1">Faximile :</p>
          <p>(0281) 635327</p>

          <p class="mb-1 fw-bold">Selain DPPKBP, Anda juga dapat menghubungi atau mendatangi</p>
          <p class="mb-1 fw-bold">Unit Pelaksanaan Teknis Daerah Perlindungan Perempuan dan Anak Kabupaten Banyumas (UPTD PPA Kabupaten Banyumas)</p>
          <p class="mb-1">Alamat UPTD PPA Kabupaten Banyumas :</p>
          <p class="mb-1">Jl. Prof. Moch. Yamin Gang IV RT. 05 / RW. 04, Kel. Karang Pucung, Purwokerto Selatan, Jawa Tengah 53142</p>
          <p class="mb-1">No. Pengaduan HP / WA :</p>
          <p class="mb-1">081329860101</p>
          <p class="mb-1">Email :</p>
          <p class="mb-1">uptdppabanyumas@gmail.com</p>
        </div>
        <div class="col-md-4 d-flex">
          <img src="assets/images/landing/ibu.png" alt="Ibu Vector" width="420px" class="my-auto">
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
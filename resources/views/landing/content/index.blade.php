@extends('landing/layout/main')
@section('content')
<div class="container mt-3 mb-5">
  <div class="text-center mb-5">
    <h1 class="mb-3 fw-semibold">Website Pengaduan Wanita dan Anak Kabupaten Banyumas</h1>
    <h4 class="fw-medium">Sampaikan aduan atas kasus yang Anda Alami untuk Diri Sendiri dan Demi Mengurangi Angka Kasus Kekerasan dan Pelecehan di Kabupaten Banyumas</h4>
  </div>
  <div class="row mb-5">
    <div class="col-md-5">
      <h2 class="fw-semibold">Jadilah Bagian dari <br> Pelindung Wanita dan Anak <br> <span class="text-primary">#PeduliWanitadanAnak</span></h2>
      <p class="fw-medium fs-5" style="text-align: justify">Hargai setiap pribadi yang ada dan lindungi orang di sekitar kita terutama wanita dan anak, karena kita semua berharga.</p>
      <p class="fw-medium fs-5" style="text-align: justify">Berani laporkan jika Anda atau orang disekitar Anda terindikasi mengalami kekerasan maupun pelecehan.</p>
      <a href="/aduan" class="btn btn-blue fw-semibold text-dark rounded-pill px-5 fs-5 mb-3">Laporkan</a>
    </div>
    <div class="col-md-7 position-relative">
      <a href="https://www.youtube.com/watch?v=B7pdkyeOZok&feature=youtu.be&ab_channel=InstituteforCriminalJusticeReform" target="_blank" class="d-flex">
        <img src="./assets/images/landing/youtube.png" alt="Thumbnail" class="mw-100 mh-100">
        <img src="./assets/images/landing/logoYtb.png" alt="Logo Youtube" class="position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);">
      </a>
    </div>
  </div>

  {{-- Carousel --}}
  <div class="pt-3 mb-5">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/landing/carousel1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/landing/carousel2.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  {{-- Akhir dari Carousel --}}

  {{-- Prosedur Pengaduan --}}
  <h2 class="mb-4">Prosedur Pengaduan</h2>
  <div class="row mb-5">
    <div class="col-md-3 text-center">
      <img src="./assets/images/landing/prosedur1.png" alt="Prosedur 1">
      <h5 class="fw-semibold mt-2">Tulis Aduan</h5>
      <p>Tulis aduan Anda dengan lengkap dan jelas pada bagian form daftar aduan pada web</p>
    </div>
    <div class="col-md-3 text-center">
      <img src="./assets/images/landing/prosedur2.png" alt="Prosedur 2">
      <h5 class="fw-semibold mt-2">Laporan Masuk</h5>
      <p>Aduan akan otomatis masuk dan diteruskan pada unit yang menangani</p>
    </div>
    <div class="col-md-3 text-center">
      <img src="./assets/images/landing/prosedur3.png" alt="Prosedur 3">
      <h5 class="fw-semibold mt-2">Proses Tindak Lanjut</h5>
      <p>Dalam waktu cepat laporan akan ditindak lanjuti dan menghubungi pelapor</p>
    </div>
    <div class="col-md-3 text-center">
      <img src="./assets/images/landing/prosedur4.png" alt="Prosedur 4">
      <h5 class="fw-semibold mt-2">Penanganan</h5>
      <p>Dilakukan penanganan yang sesuai pada korban dan kasus yang dialami</p>
    </div>
  </div>
  {{-- Akhir dari prosedur pengaduan --}}

  {{-- Berita Terkini --}}
  <h2>Berita Terkini</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow mt-4 " >
        <img src="./assets/images/landing/pakganjar.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-muted mb-1">Kabupaten Banyumas | 27 Juli 2022</p>
          <h5 class="card-title mb-3">Berpihak pada Dunia Anak, Pemprov Jateng Luncurkan “Flexi Time” dan “Jogo Konco”
          </h5>
          <a href="/news" class="btn btn-blue fw-medium px-4 rounded-pill">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow mt-4" >
        <img src="./assets/images/landing/pakganjar.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-muted mb-1">Kabupaten Banyumas | 27 Juli 2022</p>
          <h5 class="card-title mb-3">Berpihak pada Dunia Anak, Pemprov Jateng Luncurkan “Flexi Time” dan “Jogo Konco”
          </h5>
          <a href="/news" class="btn btn-blue fw-medium px-4 rounded-pill">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow mt-4" >
        <img src="./assets/images/landing/pakganjar.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-muted mb-1">Kabupaten Banyumas | 27 Juli 2022</p>
          <h5 class="card-title mb-3">Berpihak pada Dunia Anak, Pemprov Jateng Luncurkan “Flexi Time” dan “Jogo Konco”
          </h5>
          <a href="/news" class="btn btn-blue fw-medium px-4 rounded-pill">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-5">
    <div class="col-md-4">
      <div class="card shadow mt-4" >
        <img src="./assets/images/landing/pakganjar.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-muted mb-1">Kabupaten Banyumas | 27 Juli 2022</p>
          <h5 class="card-title mb-3">Berpihak pada Dunia Anak, Pemprov Jateng Luncurkan “Flexi Time” dan “Jogo Konco”
          </h5>
          <a href="/news" class="btn btn-blue fw-medium px-4 rounded-pill">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow mt-4" >
        <img src="./assets/images/landing/pakganjar.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-muted mb-1">Kabupaten Banyumas | 27 Juli 2022</p>
          <h5 class="card-title mb-3">Berpihak pada Dunia Anak, Pemprov Jateng Luncurkan “Flexi Time” dan “Jogo Konco”
          </h5>
          <a href="/news" class="btn btn-blue fw-medium px-4 rounded-pill">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow mt-4" >
        <img src="./assets/images/landing/pakganjar.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-muted mb-1">Kabupaten Banyumas | 27 Juli 2022</p>
          <h5 class="card-title mb-3">Berpihak pada Dunia Anak, Pemprov Jateng Luncurkan “Flexi Time” dan “Jogo Konco”
          </h5>
          <a href="/news" class="btn btn-blue fw-medium px-4 rounded-pill">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
  {{-- Akhir dari berita Terkini --}}
  
  {{-- Grafik --}}
  <div class="row">
    <div class="col-md-6 d-flex mb-3">
      <div class="card bg-footer rounded-4 border-0 px-3 py-4" >
        <div class="card-body d-flex flex-column">
          <h4 class="text-center fw-semibold mb-4">Jumlah Anak Korban Kekerasan di Jawa Tengah Menurut Kabupaten/Kota (2021*)</h4>
          <div class="col-md-12 m-auto">
            <img src="./assets/images/landing/jml_korban.png" alt="Grafik jumlah korban" width="100%">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex mb-3">
      <div class="card bg-footer rounded-4 border-0 px-3 py-4" >
        <div class="card-body d-flex flex-column">
          <h4 class="text-center fw-semibold">Data Penanganan Kasus Kekerasan Berbasis Gender dan Anak di Kabupaten Banyumas</h4>
          <div class="col-md-12 m-auto">
            <img src="./assets/images/landing/penanganan.png" alt="Grafik penanganan korban" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Akhir dari Grafik --}}
</div>
@endsection
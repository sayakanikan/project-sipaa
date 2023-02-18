@extends('landing/layout/main')
@section('content')
<div class="container mt-3 mb-5">
  <a href="/aduan" class="btn text-muted mb-3">Kembali</a>
  
  <h2 class="text-center mb-5">Prosedur Pengaduan</h2>

  <div class="row mb-4" style="margin: 0 15vh;">
    <div class="col-md-4 d-flex flex-column">
      <div class=" rounded-pill d-flex m-auto" style="height: 100px; width:100px;">
        <img src="./assets/images/landing/vecProsedur1.png" alt="Prosedur" class="m-auto">
      </div>
      <h5 class="fw-semibold mt-3 mx-auto">Tulis Aduan</h5>
    </div>
    <div class="col-md-8 d-flex">
      <p class="fw-normal m-auto" style="text-align: justify;">Silahkan tulis aduan Anda mulai dari mengisi data diri korban dan pelapor dengan lengkap dan jelas pada bagian form daftar aduan pada web sampai notifikasi ‘SUBMIT BERHASIL” muncul</p>
    </div>
  </div>
  
  <div class="row mb-4" style="margin: 0 15vh;">
    <div class="col-md-4 d-flex flex-column position-relative">
      <div class=" rounded-pill d-flex m-auto" style="height: 100px; width:100px;">
        <img src="./assets/images/landing/vecProsedur2.png" alt="Prosedur" class="m-auto">
      </div>
      <h5 class="fw-semibold mt-3 mx-auto">Laporan Masuk</h5>
    </div>
    <div class="col-md-8 d-flex">
      <p class="fw-normal m-auto" style="text-align: justify;">Aduan yang Anda Anda masukkan akan otomatis masuk dan diteruskan pada unit yang menangani. </p>
    </div>
  </div>
  
  <div class="row mb-4" style="margin: 0 15vh;">
    <div class="col-md-4 d-flex flex-column position-relative">
      <div class=" rounded-pill d-flex m-auto" style="height: 100px; width:100px;">
        <img src="./assets/images/landing/vecProsedur3.png" alt="Prosedur" class="m-auto">
      </div>
      <h5 class="fw-semibold mt-3 mx-auto">Proses Tindak Lanjut</h5>
    </div>
    <div class="col-md-8 d-flex">
      <p class="fw-normal m-auto" style="text-align: justify;">AdDalam waktu cepat laporan akan ditindak lanjuti dan di proses. Tunggu unit yang menangani menghubungi Anda.</p>
    </div>
  </div>
  
  <div class="row mb-5" style="margin: 0 15vh;">
    <div class="col-md-4 d-flex flex-column position-relative">
      <div class=" rounded-pill d-flex m-auto" style="height: 100px; width:100px;">
        <img src="./assets/images/landing/vecProsedur4.png" alt="Prosedur" class="m-auto">
      </div>
      <h5 class="fw-semibold mt-3 mx-auto">Penanganan</h5>
    </div>
    <div class="col-md-8 d-flex">
      <p class="fw-normal m-auto" style="text-align: justify;">Dilakukan penanganan yang sesuai pada korban dan kasus yang dialami sesuai prosedur yang ada.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 px-5 py-5 rounded-4" style="background: linear-gradient(180deg, #1976D2 0%, #7DB4FF 100%);">
      <h3>Pengaduan Anak dan Wanita di Banyumas</h3>
      <p>Kirim laporan atas kekerasan atau pelecehan yang Anda atau orang sekitar <br> Anda dapatkan.</p>
      <img src="./assets/images/landing/prosedurForm.png" alt="Form Prosedur" width="100%">
    </div>
  </div>
</div>
@endsection
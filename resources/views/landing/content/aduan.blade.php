@extends('landing/layout/main')
@section('content')
<div class="container mt-3 mb-5">
  <div class="d-flex justify-content-between align-content-center mb-2">
    <h5 class="my-auto">Data yang tersimpan telah terjamin kerahasiaanya.</h5>
    <a href="/prosedur" class="btn my-auto d-flex">
      <img src="assets/images/landing/prosedur.png" width="25px" height="25px" alt="Tanda tanya">
      <h5 class="my-auto ms-2">Prosedur</h5>
    </a>
  </div>
  <div class="bg-aduan rounded-4 px-4 py-5">
    <form class="row g-3 fw-semibold">
      <div class="row px-1 mb-3 mt-2">
        <label for="subjek" class="col-sm-1 col-form-label">Subjek :</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="subjek" id="subjek">
        </div>
      </div>
      <div class="col-md-6">
        <h4 class="fw-bold mb-4">Data Pelapor</h4>
        <div class="col-12 mb-3">
          <label for="name" class="form-label">Nama Pelapor *</label>
          <input type="text" class="form-control" name="namaPelapor" id="name" required>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-5 pt-0">Pelapor adalah *</legend>
          <div class="col-sm-7 d-flex">
            <div class="form-check me-4">
              <input class="form-check-input" type="radio" name="wni" id="wni" value="option1" checked>
              <label class="form-check-label" for="wni">
                WNI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="penduduk" id="penduduk" value="option2">
              <label class="form-check-label" for="penduduk">
                Penduduk
              </label>
            </div>
          </div>
        </fieldset>

        <div class="col-12 mb-3">
          <label for="identitas" class="form-label">Nomor Identitas Pelapor(KTP/Pasport/SIM) *</label>
          <input type="text" class="form-control" name="identitas" id="identitas" required>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="col-md-6">
            <label for="telepon" class="form-label">No Telepon/HP *</label>
            <input type="tel" class="form-control" name="telepon" id="telepon" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat *</label>
          <textarea class="form-control" name="alamat" id="alamat" rows="4" required></textarea>
        </div>

        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori Pelapor *</label>
          <select class="form-select" aria-label="Default select example" name="kategori" id="kategori" required>
            <option selected disabled hidden>--Pilih Kategori --</option>
            <option value="Korban">Korban</option>
            <option value="Kerabat Korban">Kerabat Korban</option>
            <option value="Keluarga Korban">Keluarga Korban</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <h4 class="fw-bold mb-4">Data Korban</h4>
        <div class="col-12 mb-3">
          <label for="name" class="form-label">Nama Korban *</label>
          <input type="text" class="form-control" name="namaKorban" id="name" required>
        </div>

        <div class="mb-3">
          <label for="pekerjaan" class="form-label">Pekerjaan Korban *</label>
          <select class="form-select" aria-label="Default select example" name="pekerjaan" id="pekerjaan" required>
            <option selected disabled hidden>--Pilih Pekerjaan --</option>
            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
            <option value="PNS">PNS</option>
            <option value="Swasta">Swasta</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Polisi">Polisi</option>
            <option value="TNI">TNI</option>
            <option value="Buruh">Buruh</option>
            <option value="Lain-lain">Lain-lain</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="kasus" class="form-label">Kasus yang dialami *</label>
          <textarea class="form-control" name="kasus" id="kasus" rows="3" required></textarea>
        </div>

        <div class="row">
          <label for="formFile" class="form-label col-md-3 mt-1">Unggah Bukti</label>
          <div class="col-md-9">
            <input class="form-control" type="file" id="formFile">
            <p style="font-size: 12px" class="mt-1">*Jika ada</p>
          </div>
        </div>

        <div class="col-12 mb-3">
          <label for="teleponKorban" class="form-label">No Telepon/HP *</label>
          <input type="text" class="form-control" name="teleponKorban" id="teleponKorban" required>
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat *</label>
          <textarea class="form-control" name="alamat" id="alamat" rows="4" required></textarea>
        </div>

      </div>
      <div class="form-check mb-3 ms-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
        <label class="form-check-label" for="flexCheckDefault">
          Dengan mengisi form ini dan mengirimkan aduan, Anda telah menyetujui Ketentuan Layanan dan Kebijakan Privasi kami.
        </label>
      </div>
      <div class="d-grid d-md-block gap-2">
        <button class="btn btn-primary px-4 fw-medium" type="submit">Submit</button>
        <a href="/" class="btn btn-light px-4 fw-medium" type="submit">Cancel</a>
      </div>
    </form>
  </div>
</div>
@endsection
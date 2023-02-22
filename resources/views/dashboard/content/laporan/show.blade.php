@extends('dashboard/layouts/main')
@section('content')
  <h3>Laporan Masuk</h3>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card px-3 py-3 border-0" >
        <div class="card-body">
          <h5>Data Korban</h5>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th scope="col">Tanggal Laporan</th>
                  <th scope="col">Nama dan Umur Korban</th>
                  <th scope="col">Pekerjaan Korban</th>
                  <th scope="col">Deskripsi Kasus</th>
                  <th scope="col">No.Telepon/HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Bukti</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>22-10-2022</td>
                  <td>Siti Ani, 24 th</td>
                  <td>Mahasiswa</td>
                  <td>Terjadi pelecehan seksual pada korban yang menyebabkan memar dan trauma pada korban.</td>
                  <td>082143437810</td>
                  <td>Kauman 4 no 2, Pamijen, Kabupaten Banyumas</td>
                  <td><a href="/laporan/bukti" class="btn btn-primary">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card px-3 py-3 border-0" >
        <div class="card-body">
          <h5>Data Pelapor</h5>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th scope="col">Tanggal Laporan</th>
                  <th scope="col">Nama Pelapor</th>
                  <th scope="col">Status Pelapor</th>
                  <th scope="col">Nomor Identitas</th>
                  <th scope="col">Email</th>
                  <th scope="col">No.Telepon/HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kategori Pelapor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>22-10-2022</td>
                  <td>Adhe Nuzula</td>
                  <td>WNI</td>
                  <td>35760000200201</td>
                  <td>adhe@gmail.com</td>
                  <td>081234567810</td>
                  <td>Kauman 3 no 22, Pamijen, Kabupaten Banyumas</td>
                  <td>Kerabat Korban</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
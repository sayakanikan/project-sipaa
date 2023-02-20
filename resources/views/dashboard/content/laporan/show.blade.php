@extends('dashboard/layouts/main')
@section('content')
  <h3>Laporan Masuk</h3>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card px-3 py-3 border-0" >
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th scope="col">Tanggal Laporan</th>
                  <th scope="col">Subjek Aduan</th>
                  <th scope="col">Nama dan Umur Korban</th>
                  <th scope="col">Deskripsi Kasus</th>
                  <th scope="col">Pelapor</th>
                  <th scope="col">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>15-09-2022</td>
                  <td>Pelecehan sepulang sekolah oleh tetangga sendiri </td>
                  <td>Gita Wardani, 15 th</td>
                  <td>Terjadi pelecehan seksual pada korban yang menyebabkan memar dan trauma pada korban.</td>
                  <td>Gilang</td>
                  <td><a href="/laporan/show" class="btn btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td>01-09-2022</td>
                  <td>KDRT yang sering didapatkan oleh suami korban sendiri</td>
                  <td>Gemilang P, 36 th</td>
                  <td>Terjadi kekerasan dalam rumah  tangga hingga terjadi pemukulan oleh suami </td>
                  <td>Sumina</td>
                  <td><a href="/laporan/show" class="btn btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td>22-10-2022</td>
                  <td>Pelecehan pada tanggal 22 oktober 2022 yang menyebabkan memar </td>
                  <td>Siti Ani, 24 th</td>
                  <td>Terjadi pelecehan pada korban sehingga menimbulkan memar oleh temannya sendiri.</td>
                  <td>Adhe Nuzula</td>
                  <td><a href="/laporan/show" class="btn btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td>15-09-2022</td>
                  <td>Pelecehan sepulang sekolah oleh tetangga sendiri </td>
                  <td>Gita Wardani, 15 th</td>
                  <td>Terjadi pelecehan seksual pada korban yang menyebabkan memar dan trauma pada korban.</td>
                  <td>Gilang</td>
                  <td><a href="/laporan/show" class="btn btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td>01-09-2022</td>
                  <td>KDRT yang sering didapatkan oleh suami korban sendiri</td>
                  <td>Gemilang P, 36 th</td>
                  <td>Terjadi kekerasan dalam rumah  tangga hingga terjadi pemukulan oleh suami </td>
                  <td>Sumina</td>
                  <td><a href="/laporan/show" class="btn btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td>22-10-2022</td>
                  <td>Pelecehan pada tanggal 22 oktober 2022 yang menyebabkan memar </td>
                  <td>Siti Ani, 24 th</td>
                  <td>Terjadi pelecehan pada korban sehingga menimbulkan memar oleh temannya sendiri.</td>
                  <td>Adhe Nuzula</td>
                  <td><a href="/laporan/show" class="btn btn-primary">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@extends('dashboard/layouts/main')
@section('content')
  <h3>Tindakan</h3>
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
                  <th scope="col">Pelapor</th>
                  <th scope="col">Status</th>
                  <th scope="col">Kirim Tanggapan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>15-09-2022</td>
                  <td>Pelecehan sepulang sekolah oleh tetangga sendiri </td>
                  <td>Gita Wardani, 15 th</td>
                  <td>Gilang</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 btn-tindakan"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger btn-tindakan"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary mt-1">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>01-09-2022</td>
                  <td>KDRT yang sering didapatkan oleh suami korban sendiri </td>
                  <td>Gemilang P, 36 th</td>
                  <td>Sumina</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 btn-tindakan"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger btn-tindakan"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary mt-1">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>22-10-2022</td>
                  <td>Pelecehan pada tanggal 22 oktober 2022 yang menyebabkan memar </td>
                  <td>Siti Ani, 24 th</td>
                  <td>Adhe Nuzula</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 btn-tindakan"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger btn-tindakan"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary mt-1">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>15-09-2022</td>
                  <td>Pelecehan sepulang sekolah oleh tetangga sendiri </td>
                  <td>Gita Wardani, 15 th</td>
                  <td>Gilang</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 btn-tindakan"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger btn-tindakan"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary mt-1">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>01-09-2022</td>
                  <td>KDRT yang sering didapatkan oleh suami korban sendiri </td>
                  <td>Gemilang P, 36 th</td>
                  <td>Sumina</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 btn-tindakan"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger btn-tindakan"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary mt-1">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>22-10-2022</td>
                  <td>Pelecehan pada tanggal 22 oktober 2022 yang menyebabkan memar </td>
                  <td>Siti Ani, 24 th</td>
                  <td>Adhe Nuzula</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 btn-tindakan"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger btn-tindakan"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary mt-1">Kirim Email</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
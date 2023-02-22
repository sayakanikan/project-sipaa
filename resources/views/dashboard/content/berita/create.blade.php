@extends('dashboard/layouts/main')
@section('content')
  <h3>Tambahkan Halaman Berita</h3>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card px-3 py-3 border-0" >
        <div class="card-body">
          <h5>Halaman Berita</h5>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Isi berita</th>
                  <th scope="col">Upload Gambar Pendukung</th>
                  <th scope="col">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <form action="" method="POST">
                    @csrf
                    <td style="max-width: 130px">
                      <input type="date" name="tanggal" id="tanggal" class="border-0 mw-100" required>
                    </td>
                    <td style="max-width: 130px">
                      <textarea rows="2" placeholder="Tulis..." name="judul" id="judul" class="border-0 mw-100" required></textarea>
                    </td>
                    <td style="max-width: 130px">
                      <textarea rows="4" placeholder="Tulis..." name="lokasi" id="lokasi" class="border-0 mw-100" required></textarea>
                    </td>
                    <td style="min-width: 200px;">
                      <textarea rows="6" placeholder="Tulis..." name="isi" id="isi" class="border-0 w-100" required></textarea>
                    </td>
                    <td>
                      -
                    </td>
                    <td>
                      <button type="submit" class="btn btn-primary px-4">Kirim</button>
                    </td>
                  </form>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
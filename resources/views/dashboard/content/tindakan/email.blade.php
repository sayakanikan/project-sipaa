@extends('dashboard/layouts/main')
@section('content')
  <h3>Tanggapan Email</h3>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card px-3 py-3 border-0" >
        <div class="card-body">
          <h5>Tanggapan Laporan</h5>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th scope="col">Email</th>
                  <th scope="col">Subjek</th>
                  <th scope="col">Isi Pesan</th>
                  <th scope="col">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <form action="" method="POST">
                    <td style="max-width: 130px">
                      <input type="text" placeholder="Tulis..." name="email" id="email" class="border-0 mw-100" required>
                    </td>
                    <td style="max-width: 130px">
                      <textarea rows="4" placeholder="Tulis..." name="subjek" id="subjek" class="border-0 mw-100" required></textarea>
                    </td>
                    <td style="min-width: 200px;">
                      <textarea rows="4" placeholder="Tulis..." name="pesan" id="pesan" class="border-0 w-100" required></textarea>
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
@extends('dashboard/layouts/main')
@section('content')
  <h3>Laporan Masuk</h3>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card px-3 py-3 border-0" >
        <div class="card-body">
          <h5>Bukti</h5>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <img src="../assets/images/admin/bukti1.png" alt="Bukti 1">
                    <p class="text-center mt-2">Tangan.jpg</p>
                  </td>
                  <td>
                    <img src="../assets/images/admin/bukti2.png" alt="Bukti 2">
                    <p class="text-center mt-2">Muka.jpg</p>
                  </td>
                  <td>
                    <img src="../assets/images/admin/bukti3.png" alt="Bukti 3">
                    <p class="text-center mt-2">Bibir.jpg</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
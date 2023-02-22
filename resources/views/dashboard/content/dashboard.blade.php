@extends('dashboard/layouts/main')
@section('content')
  <h3 class="mb-4">Dashboard</h3>

  {{-- Totalan --}}
  <div class="row">
    <div class="col-md-4 d-flex align-items-center">
      <div class="card border-0" style="min-width: 270px">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 fs-6 text-muted">Total Laporan Masuk</h6>
          <div class="d-flex justify-content-between">
            <h4 class="card-title">116 Kasus</h4>
            <img src="./assets/images/admin/dashboard_laporan.png" alt="Icon laporan" class="position-absolute" style="right: 13px;">
          </div>
          <p class="card-text fs-6">Jumlah kasus naik dari <br> tahun kemarin</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-center">
      <div class="card border-0" style="min-width: 270px">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 fs-6 text-muted">Total Status Tindakan Diterima</h6>
          <div class="d-flex justify-content-between">
            <h4 class="card-title">116 Kasus</h4>
            <img src="./assets/images/admin/dashboard_diterima.png" alt="Icon Diterima" class="position-absolute" style="right: 13px;">
          </div>
          <p class="card-text fs-6">Jumlah kasus naik dari <br> tahun kemarin</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0" style="min-width: 270px">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 fs-6 text-muted">Total Status Tindakan Ditolak</h6>
          <div class="d-flex justify-content-between">
            <h4 class="card-title">0 Kasus</h4>
            <img src="./assets/images/admin/dashboard_ditolak.png" alt="Icon Ditolak" class="position-absolute" style="right: 13px;">
          </div>
          <p class="card-text fs-6">Jumlah kasus naik dari <br> tahun kemarin</p>
        </div>
      </div>
    </div>
  </div>

  {{-- Grafik --}}
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card border-0 px-3 py-3" >
        <div class="card-body">
          <h5 class="card-title">Grafik Laporan Masuk</h5>
          <canvas id="sales-chart"></canvas>
        </div>
      </div>
    </div>
  </div>

  {{-- Laporan Masuk --}}
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card border-0 px-3 py-3" >
        <div class="card-body">
          <h5 class="card-title mb-3">Laporan Masuk</h5>
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
              </tbody>
            </table>
          </div>
          <a href="/laporan" class="btn btn-lainya mt-2 px-5 fw-semibold">Lainya</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Status Tindakan --}}
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card border-0 px-3 py-3" >
        <div class="card-body">
          <h5 class="card-title mb-3">Status Tindakan</h5>
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
                      <button class="btn btn-success me-2 px-1 py-1"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger px-1 py-1"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>01-09-2022</td>
                  <td>KDRT yang sering didapatkan oleh suami korban sendiri</td>
                  <td>Gemilang P, 36 th</td>
                  <td>Sumina</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 px-1 py-1"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger px-1 py-1"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary">Kirim Email</a></td>
                </tr>
                <tr>
                  <td>22-10-2022</td>
                  <td>Pelecehan pada tanggal 22 oktober 2022 yang menyebabkan memar </td>
                  <td>Siti Ani, 24 th</td>
                  <td>Adhe Nuzula</td>
                  <td>
                    <div class="d-flex align-items-center my-2">
                      <button class="btn btn-success me-2 px-1 py-1"><i class="bi bi-check"></i></button>
                      <button class="btn btn-danger px-1 py-1"><i class="bi bi-x"></i></button>
                    </div>
                  </td>
                  <td><a href="/tindakan/email" class="btn btn-primary">Kirim Email</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="/tindakan" class="btn btn-lainya mt-2 px-5 fw-semibold">Lainya</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    if ($("#sales-chart").length) {
      var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
      var SalesChart = new Chart(SalesChartCanvas, {
        type: 'bar',
        data: {
          labels: ["Jul", "Agu", "Sep", "Okt", "Nov", 'Des'],
          datasets: [{
              label: 'Dokumen Ditambahkan',
              data: [10, 20, 30, 50, 20, 10],
              backgroundColor: '#98BDFF'
            }
          ]
        },
        options: {
          cornerRadius: 5,
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: true,
              gridLines: {
                display: true,
                drawBorder: false,
                color: "#F2F2F2"
              },
              ticks: {
                display: true,
                min: 0,
                max: 50,
                callback: function(value, index, values) {
                  return  value ;
                },
                autoSkip: true,
                maxTicksLimit: 10,
                fontColor:"#6C7383"
              }
            }],
            xAxes: [{
              stacked: false,
              ticks: {
                beginAtZero: true,
                fontColor: "#6C7383"
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
                display: false
              },
              barPercentage: 1
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        },
      });
      
      document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
    }
  </script>
@endsection
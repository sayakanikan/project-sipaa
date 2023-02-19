{{-- Sidebar --}}
<div class="col-md-3 py-3 d-flex justify-content-center vh-100">
  <div class="w-100 px-3">
    <img src="./assets/images/admin/logoSidebar.png" alt="Logo sidebar" width="250px">
    <hr class="border-4">
    <a href="/dashboard" class="{{ Request::is('dashboard*') ? 'active-sidebar' : '' }} px-4 py-3 mt-5 rounded-4 d-flex sidebarpage">
      <i class="bi bi-grid-3x3-gap-fill"></i>
      <p class="mb-0 ms-3">Dashboard</p>
    </a>
    <a href="/laporan" class="{{ Request::is('laporan*') ? 'active-sidebar' : '' }} px-4 py-3 mt-2 rounded-4 d-flex sidebarpage">
      <i class="bi bi-archive-fill"></i>
      <p class="mb-0 ms-3">Laporan Masuk</p>
    </a>
    <a href="/tindakan" class="{{ Request::is('tindakan*') ? 'active-sidebar' : '' }} px-4 py-3 mt-2 rounded-4 d-flex sidebarpage">
      <i class="bi bi-hourglass-split"></i>
      <p class="mb-0 ms-3">Status Tindakan</p>
    </a>
    <a href="/berita" class="{{ Request::is('berita*') ? 'active-sidebar' : '' }} px-4 py-3 mt-2 rounded-4 d-flex sidebarpage">
      <i class="bi bi-newspaper"></i>
      <p class="mb-0 ms-3">Halaman Berita</p>
    </a>
  </div>
</div>
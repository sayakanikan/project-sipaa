{{-- Sidebar --}}
<div class="w-100 padding-sidebar">
  <img src="../../assets/images/admin/logoSidebar.png" alt="Logo sidebar" width="250px" class="mw-100 logoBesar">
  <img src="../../assets/images/admin/logoBunder.png" alt="Logo kecil" class="mw-100 rounded-pill logoKecil">
  <hr class="border-4">
  <a href="/dashboard" class="{{ Request::is('dashboard*') ? 'active-sidebar' : '' }} padding-items-sidebar py-3 mt-5 rounded-4 d-flex sidebarpage">
    <i class="bi bi-grid-3x3-gap-fill"></i>
    <p class="mb-0 ms-3 text-sidebar">Dashboard</p>
  </a>
  <a href="/laporan" class="{{ Request::is('laporan*') ? 'active-sidebar' : '' }} padding-items-sidebar py-3 mt-2 rounded-4 d-flex sidebarpage">
    <i class="bi bi-archive-fill"></i>
    <p class="mb-0 ms-3 text-sidebar">Laporan Masuk</p>
  </a>
  <a href="/tindakan" class="{{ Request::is('tindakan*') ? 'active-sidebar' : '' }} padding-items-sidebar py-3 mt-2 rounded-4 d-flex sidebarpage">
    <i class="bi bi-hourglass-split"></i>
    <p class="mb-0 ms-3 text-sidebar">Status Tindakan</p>
  </a>
  <a href="/berita" class="{{ Request::is('berita*') ? 'active-sidebar' : '' }} padding-items-sidebar py-3 mt-2 rounded-4 d-flex sidebarpage">
    <i class="bi bi-newspaper"></i>
    <p class="mb-0 ms-3 text-sidebar">Halaman Berita</p>
  </a>
  <a type="button" class="padding-items-sidebar py-3 mt-2 rounded-4 d-flex sidebarpage" onclick="logout()">
    <i class="bi bi-power"></i>
    <p class="mb-0 ms-3 text-sidebar">Logout</p>
  </a>
</div>
<form action="/logout" method="POST" class="d-none" id="logout-form">@csrf</form>
<script>
function logout(){
  document.getElementById('logout-form').submit();
}
</script>
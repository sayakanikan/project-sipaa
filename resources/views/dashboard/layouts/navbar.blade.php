<nav class="navbar navbar-expand-lg bg-navbar h-100 px-4" style="max-height: 120px">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 300px;" aria-describedby="addon-wrapping">
      </div>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <div class="me-2 d-flex">
          <button type="button" class="btn btn-bell" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<p class='fw-medium'>1 Laporan Masuk dari Gita</p><hr><p class='fw-medium'>1 Laporan Masuk dari Adhe</p><hr><p class='fw-medium'>Tanggapan Email ke Adhe Terkirim</p><hr><p class='fw-medium'>Tanggapan Email ke Gilang Terkirim</p><hr>">
          <i class="bi bi-bell-fill"></i>
          </button>
        </div>
        <div class="line"></div>
        <div class="ms-2">
          <button type="button" class="btn btn-bell d-flex align-items-center" data-bs-container="body" data-bs-toggle="popover" data-bs-html = "true" data-bs-placement="bottom" data-bs-content="<a type='button' class='btn' onclick='logout()'>Logout</a>">
            <img src="../../assets/images/admin/logoLogin.png" alt="Profile" width="35px" height="35px" class="me-2 rounded-pill">
            <p class="my-auto fw-semibold">{{ auth()->user()->name }}</p>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>
<form action="/logout" method="POST" class="d-none" id="logout-form">@csrf</form>
<script>
function logout(){
  console.log('Logged out');
  // document.getElementById('logout-form').submit();
}
</script>
{{-- Navbar --}}
<nav class="navbar sticky-top navbar-expand-lg me-4 bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="./assets/images/logo.svg" width="250px" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto fw-semibold" style="font-size:16px">
        <a class="nav-link {{ Request::is('/') || Request::is('berita') ? 'active' : '' }} me-4" aria-current="page" href="/">BERANDA</a>
        <a class="nav-link {{ Request::is('aduan') || Request::is('prosedur') ? 'active' : '' }} me-4" href="/aduan">DAFTAR ADUAN</a>
        <a class="nav-link {{ Request::is('about') ? 'active' : '' }} me-4" href="/about">TENTANG KAMI</a>
        <a class="nav-link {{ Request::is('faq') ? 'active' : '' }}" href="/faq">FAQ</a>
      </div>
    </div>
  </div>
</nav>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard SIPAA | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- ReCaptcha Google --}}
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="../../assets/css/login.css">
  </head>
  <body>
    <div class="bg-main vw-100 vh-100 align-items-center position-relative">
      <img src="./assets/images/admin/bg_white.png" alt="Vector" class="img-vector">
      <img src="./assets/images/admin/logoLogin.png" alt="Logo" class="logo-login">
      <div class="">
        <h3 class="mb-5">LOGIN</h3>
        {{-- Alert jika login gagal --}}
        @if (session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <p class="fw-semibold">Masukkan email dan password Anda dengan benar</p>
        <form action="/authenticate" method="POST">
          @csrf
          <div class="mb-3 input-group flex-nowrap">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required aria-describedby="addon-wrapping">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope"></i></span>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3 input-group flex-nowrap">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required aria-describedby="addon-wrapping">
            <span class="input-group-text" id="addon-wrapping">
              <input type="checkbox" value="yes" class="position-absolute cekbox" id="flexCheckDefault" onclick="lihatPassword()">
              <div id="mata">
                <i class="bi bi-eye-slash" ></i>
              </div>
            </span>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
  
          {{-- Verifikasi saya bukan robot --}}
          <div class="d-flex">
            <div class="form-group row mx-auto">
              <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
            </div>
          </div>
  
          <button type="submit" class="btn btn-primary mt-3 px-5 fw-semibold signin">Sign In</button>
        </form>
      </div>
    </div>
    <script>
      const checkbox = document.getElementById('flexCheckDefault');
      const password = document.getElementById('password');
      const logo = document.getElementById('mata');
      
      function lihatPassword() {
        if (checkbox.checked) {
          password.type = 'text';
          logo.innerHTML = '<i class="bi bi-eye" ></i>';
        } else if (checkbox.checked == false) {
          password.type = 'password';
          logo.innerHTML = '<i class="bi bi-eye-slash" ></i>';
        }
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
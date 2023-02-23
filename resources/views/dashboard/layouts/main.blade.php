<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../../logo.png">
    <title>Dashboard SIPAA | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- Font Inter --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
      * {
        font-family: 'Inter', sans-serif;
      }
      .bg-navbar {
        background-color: #7DB4FF;
      }
      .btn-bell {
        background-color: #7DB4FF;
        border: none;
      }
      .line {
        border-left: 2px solid black;
        height: 45px;
      }
      .active-sidebar {
        background-color: #7DB4FF;
        font-weight: 600;
      }
      .sidebarpage {
        text-decoration: none;
        color: #000;
        transition: color 0.5s ease;
      }
      .sidebarpage:hover {
        background-color: #7DB4FF;
      }
      .bg-content {
        background: linear-gradient(0deg, #F0F3F1, #F0F3F1);
      }
      .btn-lainya {
        background-color: #7DB4FF;
        border: none;
      }
      .btn-lainya:hover {
        background-color: #73a2e4;
      }
      .btn-hapus {
        background-color: #B8B8B8;
        border: none;
      }
      .btn-hapus:hover {
        background-color: #8a8a8a;
      }

    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        @include('dashboard/layouts/sidebar')
        <div class="col-md-9 px-0">
          @include('dashboard/layouts/navbar')
          <div class="w-100 bg-content container px-5 py-5" style="min-height: 82.8%;">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
      const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
  </body>
</html>
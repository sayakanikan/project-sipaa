<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPAA | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .bg-form {
        background-color: #ADD0FF;
      }
      .bg-faq {
        background-color: #549DFF;
      }
      .bg-aduan {
        background-color: #ADD0FF;
      }
      .bg-prosedur {
        background-color: #1976D2;
      }
      .bg-footer{
        background-color: #7DB4FF;
      }
      .btn-blue {
        background-color: #7DB4FF;
      }
      .btn-blue:hover {
        background-color: #6c9cdf;
      }
      .activenav {
        font-weight: 700;
        border-bottom: 1px solid #000;
        padding-bottom: 1px;
        max-width: 150px;
      }
    </style>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
  </head>
  <body>
    @include('landing/layout/navbar')

    {{-- <div class="container mt-3 mb-5"> --}}
    @yield('content')
    {{-- </div> --}}

    @include('landing/layout/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
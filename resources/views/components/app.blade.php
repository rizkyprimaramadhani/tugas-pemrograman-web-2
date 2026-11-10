<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  </head>


  <body class="bg-dark">

    {{-- page title --}}
    <div class="py-5 text-center text-white header-gradient">
        <h1 class="fw-bold">{{ $title }}</h1>

        <p class="mb-0 mt-2">
          Solusi sederhana untuk mengelola dan memantau tugas kuliahmu.
        </p>
    </div>
    {{-- Custom CSS --}}
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }

      .header-gradient {
          background: linear-gradient(
              135deg,
              #210F00,
              #3E130A,
              #7A0F1F,
              #A12042,
              #C15B7F
          );
      }
    </style>

    <div class="bg-dark">

    {{-- main app --}}
    <div class="container my-5">
        {{ $slot }}
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
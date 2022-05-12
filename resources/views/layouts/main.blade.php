<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Model Controller - @yield('title')</title>

  {{-- Con la funzione asset importo il foglio di stile css --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  {{-- § Includo l'header --}}
  @include('partials.header')

  <main>
    {{-- # è un punto di accesso opzionale per tutti i blade che implementino questo layout --}}
    @yield('main-content')
  </main>

  {{-- § Includo il footer --}}
  @include('partials.footer')
</body>
</html>

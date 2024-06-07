<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>

<body>
  @include('partials.header')


  <main>
   
    {{-- Qui verrà inserito il contenuto di ogni pagina --}}
    @yield('content')
  </main>


  <footer>
    Questo è il mio footer
  </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
   @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">

  {{-- Navbar --}}
  @include('dashboard.partials.navbar')

  {{-- Konten utama --}}
  <main class="flex-grow">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('dashboard.partials.footer')

</body>
</html>

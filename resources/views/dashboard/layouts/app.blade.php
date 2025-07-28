<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-300 min-h-screen">

 <!-- SIDEBAR -->
 @include('dashboard.partials.sidebar')


  <!-- KONTEN UTAMA -->
  <div class="ml-64 min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    @include('dashboard.partials.navbar')

    {{-- MAIN CONTENT --}}
    <main class="flex-1 p-6">
      @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('dashboard.partials.footer')

  </div>

</body>
</html>

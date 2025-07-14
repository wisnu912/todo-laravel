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
<aside class="fixed top-0 left-0 h-screen w-64 bg-sky-600 text-white p-6 shadow-xl z-40 flex flex-col justify-between">
  <div>
    <h2 class="text-2xl font-bold mb-10 tracking-wide">TaskManager</h2>

    <nav>
      <ul class="space-y-4">
        <li>
          <a href="#" class="block px-4 py-2 rounded hover:bg-sky-700 transition">
            📋 Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 rounded hover:bg-sky-700 transition">
            📝 Create Todo
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>


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

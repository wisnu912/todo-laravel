<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       @vite('resources/css/app.css')
    <title>page Login</title>
</head>
<body>


  <div class="text-center mt-20 mb-0 px-4 mx-10">
    <div class="grid grid-cols-2 gap-8 items-center">

   <div class="mx-10 px-10">
    <p class="text-left mb-4 font-bold text-">
      Welcome Back
    </p>
<div class="grid grid-cols-2 mb-5 space-x-4">
  <div class="border border-1 rounded-xl shadow bg-gray-400 text-white p-1 hover:bg-gray-200 hover:text-gray-700">Google</div>

  <div class="border border-1 rounded-xl shadow bg-gray-400 text-white p-1 hover:bg-gray-200 hover:text-gray-700" >Apple</div>

</div>

  <form action="{{ route('login.proses') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label class="block mb-1 text-sm font-medium text-gray-700 text-left" for="email">Email</label>
      <input
        type="text"
        name="email"
        id="email"
        value="{{ old('email') }}"
        class="@error('email') is-invalid @enderror w-full border border-gray-300 rounded px-3 py-2"
      />
    </div>
         @error('email')
              <div class=" text-left text-red-600 mt-0">{{ $message }}</div>
            @enderror
    <div>
      <label class="block mb-1 text-sm font-medium text-gray-700 text-left" for="password">Password</label>
      <input
        type="password"
        name="password"
        id="password"
        class="@error('password') is-invalid @enderror w-full border border-gray-300 rounded px-3 py-2"
      />

       @error('password')
              <div class="text-left text-red-600">{{ $message }}</div>
            @enderror
    </div>

    <button
      type="submit"
      class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full"
    >
      Login
    </button>

    <p class="text-left">
       Belum punya akun ? <a class="text-sm text-sky-700 " href="{{ route('register-page') }}">Register</a>
    </p>
  </form>
</div>


     <!-- Kiri: Deskripsi -->
    <div class="text-left">
      <h2 class="text-3xl font-bold mb-4 text-gray-800">Produktivitas Harian Anda, Lebih Terorganisir</h2>
      <p class="text-lg text-gray-600">
        Aplikasi <strong>To-Do List</strong> dan <strong>Perencana Harian</strong> ini membantu Anda mengatur tugas, menjadwalkan aktivitas, dan mencapai target harian dengan mudah dan efisien.
      </p>
    </div>
  </div>
</body>
</html>

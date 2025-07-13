<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
  {{-- Ganti dengan <link rel="stylesheet" href="..." /> jika bukan Laravel --}}
  <title>Register Page</title>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-6xl px-6 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

      <!-- Register Form -->
      <div>
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800 text-center">Buat Akun Baru</h2>

        <!-- Social register buttons -->
        <div class="grid grid-cols-2 gap-4 mb-6">
          <button type="button" class="border border-gray-300 rounded-xl bg-white text-gray-800 py-2 hover:bg-gray-100 text-sm md:text-base">Google</button>
          <button type="button" class="border border-gray-300 rounded-xl bg-white text-gray-800 py-2 hover:bg-gray-100 text-sm md:text-base">Apple</button>
        </div>

        <form action="{{ route('regis.proses') }}" method="POST" class="space-y-5">
          @csrf

          <!-- Username -->
          <div>
            <label for="username" class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input
              type="text"
              name="username"
              id="username"
              class="@error('username') is-invalid @enderror w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm md:text-base"
            />
            @error('username')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
            <input
              type="text"
              name="email"
              id="email"

              class="@error('email') is-invalid @enderror w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm md:text-base"
            />
            @error('email')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
            <input
              type="password"
              name="password"
              id="password"

              class="@error('password') is-invalid @enderror w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm md:text-base"
            />
            @error('password')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <!-- Password Confirmation -->
          <div>
            <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-700">Konfirmasi Password</label>
            <input
              type="password"
              name="password_confirmation"
              id="password_confirmation"

              class="@error('password_confirmation') is-invalid @enderror w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm md:text-base"
            />
          </div>

           @error('password')
              <div class="text-red-600">{{ $message }}</div>
            @enderror

          <!-- Submit -->
          <button
            type="submit"
            class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition duration-200 text-sm md:text-base"
          >
            Daftar
          </button>

          <p class="text-sm text-left mt-2">
            Sudah punya akun?
            <a href="{{ route('login-page') }}" class="text-sky-600 hover:underline">Login di sini</a>
          </p>
        </form>
      </div>

      <!-- Deskripsi Kanan -->
      <div class="text-left">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800">
          Mulai Perjalanan Produktifmu Hari Ini
        </h2>
        <p class="text-base md:text-lg text-gray-600 leading-relaxed">
          Dengan <strong>Task Manager</strong>, kamu bisa merencanakan tugas, mengatur jadwal, dan fokus menyelesaikan pekerjaan penting. Daftar sekarang dan raih hari-hari yang lebih teratur dan efektif!
        </p>
      </div>

    </div>
  </div>

</body>
</html>

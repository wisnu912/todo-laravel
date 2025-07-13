<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css') <!-- Ganti dengan <link> biasa jika bukan Laravel -->
  <title>Login Page</title>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-6xl px-6 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

      <!-- Login Form -->
      <div>
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800">Welcome Back</h2>

        <!-- Social login buttons -->
        <div class="grid grid-cols-2 gap-4 mb-6">
          <button class="border border-gray-300 rounded-xl bg-white text-gray-800 py-2 hover:bg-gray-100 text-sm md:text-base">Google</button>
          <button class="border border-gray-300 rounded-xl bg-white text-gray-800 py-2 hover:bg-gray-100 text-sm md:text-base">Apple</button>
        </div>

        <form action="" method="POST" class="space-y-5">
          <div>
            <label class="block mb-1 text-sm font-medium text-gray-700" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm md:text-base"
              required
            />
          </div>

          <div>
            <label class="block mb-1 text-sm font-medium text-gray-700" for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-sm md:text-base"
              required
            />
          </div>

          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200 text-sm md:text-base"
          >
            Login
          </button>

          <p class="text-sm text-left mt-2">
            Belum punya akun?
            <a href="#" class="text-sky-600 hover:underline">Daftar Sekarang</a>
          </p>
        </form>
      </div>

      <!-- Deskripsi Kanan -->
      <div class="text-left">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800">
          Kelola Waktu, Raih Produktivitas
        </h2>
        <p class="text-base md:text-lg text-gray-600 leading-relaxed">
          Aplikasi <strong>Task Manager</strong> kami membantu Anda menyusun jadwal, mengatur prioritas, dan menyelesaikan tugas harian dengan mudah. Tetap fokus dan terorganisir — kapan saja, di mana saja.
        </p>
      </div>

    </div>
  </div>

</body>
</html>

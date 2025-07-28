<aside class="fixed top-0 left-0 h-screen w-64 bg-sky-600 text-white p-6 shadow-xl z-40 flex flex-col justify-between">
  <div>
    <h2 class="text-2xl font-bold mb-10 tracking-wide">TaskManager</h2>

    <nav>
      <ul class="space-y-4">
        <li>
          <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-sky-700 transition">
            📋 Dashboard
          </a>
        </li>
        <li>
          <a href="{{ route('create') }}" class="block px-4 py-2 rounded hover:bg-sky-700 transition">
            📝 Create Todo
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

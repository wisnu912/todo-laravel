<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>planing  </title>
</head>
<body>



<nav class="bg-sky-500 border border-b-double  ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

    <p class="font-monospace text-white text-xl cursor-pointer m-2 font-bold">
        planing web
    </p>

    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-row font-medium p-4 space-x-4 ">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-black font-bold
          rounded-sm md:bg-transparent md:text-blue-700 md:p-0
          md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent"
           aria-current="page">Login</a>
        </li>
        <li>

        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-black font-bold
          rounded-sm hover:bg-gray-100 md:hover:bg-transparent
           md:border-0 md:hover:text-blue-700
           md:p-0 dark:text-white
           dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<footer class="bg-sky-500 shadow-sm m-4 mt-100 p-5 mx-auto m-auto">


    <div class="w-full mx-auto max-w-screen-xl p-4
    md:flex md:items-center md:justify-between ">
      <span class="text-sm text-teal-400 sm:text-center dark:text-white">© 2025
       All Rights Reserved todolist and planing
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-white sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>


</body>
</html>

@extends('dashboard.layouts.app')

@section('title' , 'profile')
@section('content')
  <div class="grid grid-cols-2">

    <div class=" h-[500px]  bg-gray-300 rounded-xl  py-2 p-4 w-auto ">

        <div class="text-md font-bold mx-auto py-2 bg-red-400  w-40 text-center h-40 rounded-[70vw] shadow-xl">

        </div>

        <div class="text-center font-bold mt-4 text-2xl italic ">
         cristiano ronaldo
        </div>


          <div class=" mx-50 mt-8 font-bold text-xl cursor-pointer ">
            <div class="mb-4 hover:text-gray-400 hover:italic">
                Profile
            </div>

            <div class="mb-4 hover:text-gray-400 hover:italic">
                content
            </div>

            <div class="hover:text-gray-400 hover:italic">
                Todolist
            </div>
        </div>

    </div>

    <div class="flex flex-col justify-end">

 <div class="bg-red-400 py-2 p-2 shadow bg-white rounded-md h-72">
    <div class="text-xl py-2 bg-gray-100 p-2 rounded-md mb-4 mt-4 text-gray-800">
    nama
    </div>

      <div class="text-xl py-2 p-2 bg-gray-100 rounded-md  mt-8 text-gray-800">
        Email
      </div>

     <div class="text-xl py-2 bg-gray-100 p-2 rounded-md  mt-10 text-gray-800">
        Taks Count
      </div>
    </div>

    <div class="flex align-bottom justify-end h-40  mt-4">
   <div class="bg-teal-500 w-full shadow-md rounded-md p-2 py-2 flex items-center align-center">

       <div class="mx-6 p-4 text-xl cursor-pointer">
        Seeting
       </div>

         <div class="mx-10 p-4 text-xl cursor-pointer">
         Delete Akun
       </div>

         <div class="mx-10 p-4 text-xl cursor-pointer">
       Taks Detail
       </div>

    </div>
    </div>


    </div>

</div>




@endsection()

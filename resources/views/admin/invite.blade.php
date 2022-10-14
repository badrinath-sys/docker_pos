 @extends('admin/layout') @section('container')
     @if (Session::has('message'))
         <p class="alert alert-info">{{ Session::get('message') }}</p>
     @endif

     <br>
     <form action="{{ url('admin/send/invitation') }}" method="post">
         @csrf
         <input
             class="shadow appearance-none border rounded lg:w-80 md:w-44  py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline"
             type="text" name="email" placeholder="enter email">

         <button class="bg-primary  text-white font-bold py-1 px-3 rounded">

             invite

         </button>
     </form>
 @endsection

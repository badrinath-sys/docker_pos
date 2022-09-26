 @extends('admin/layout') @section('container')
     @if (Session::has('message'))
         <p class="alert alert-info">{{ Session::get('message') }}</p>
     @endif

     @if (Session::has('message1'))
         <p class="alert alert-info">{{ Session::get('message1') }}</p>
     @endif

     <main class="py-4 bg-surface-secondary">

         <div class="container-fluid">

             <div class="row g-6 mb-4 justify-center ">
                 <div class="col-xl-6 col-sm-12 col-md-8 col-12">
                     <div class="card shadow border-0 mt-12">
                         <div class="card-body  mb-2">

                             <div class='flex items-center px-2 py-3'>
                                 <div class="w-full max-w-sm">
                                     <center>
                                         <div class="overflow-hidden relative w-20 h-20 bg-gray-100 rounded-full  ">
                                             <svg class="absolute w-20 h-20 text-gray-400 " fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd"
                                                     d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                     clip-rule="evenodd"></path>
                                             </svg>
                                             <svg class=" absolute h-4 w-4 text-blue-700 ml-16 mt-10" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                             </svg>

                                         </div>
                                         <h2 class="text-lg text-center text-gray-700 mb-6 mt-2">Welcome Back!</h2>
                                     </center>
                                     <div class="flex items-center border-b border-blue-100 py-2">
                                         <p class="text-blue-600">Name <br><span
                                                 class="text-gray-900  ">{{ $data->username }}</span></p>
                                     </div>
                                     <form class="w-full" action="{{ url('admin/otp') }}" method="post">
                                         {{ csrf_field() }}
                                         <div class=" border-b border-blue-100 py-2 ">
                                             <p class="text-blue-600">Email Id <br>
                                                 <input type='email' name='email' value='{{ $data->email }}'
                                                     class="text-gray-900 w-3/4 " />
                                             <div class="flex  justify-end">
                                                 <button type="submit" class="text-primary -mt-6"
                                                     onclick="toggleModal()">Update</button>
                                             </div>
                                         </div>
                                     </form>
                                     <div class=" border-b border-blue-100 py-2">
                                         <p class="text-blue-600">Password <br><span class="text-gray-900 ">*******</span>
                                         <div class="flex  justify-end">
                                             <button type="button" class="text-primary -mt-8"
                                                 onclick="toggleModal2()">Update</button>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal"
                                     style="{{ Session::has('code') ? (Session::get('code') == 1 ? 'display:block' : '') : 'display:none' }}">
                                     <div
                                         class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                         <div class="fixed inset-0 transition-opacity">
                                             <div class="absolute inset-0 bg-gray-900 opacity-75" />
                                         </div>
                                         <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                         <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                             role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                             <form action="{{ url('admin/verify/otp') }}" method="post">
                                                 {{ csrf_field() }}
                                                 <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                     <h2 class="border-b border-blue-100 py-2 text-gray-500 font-semibold">
                                                         Please
                                                         verify your e-mail address</h2>
                                                     <p class="text-green-500 text-sm  mt-4 mb-4">Please check your e-mail
                                                         account
                                                         for the verification code We just send you and enter the code in
                                                         the
                                                         below
                                                         box.</p>
                                                     <h2 Class="text-center text-gray-500 font-semibold text-sm ">Enter OTP
                                                     </h2>
                                                     <center>
                                                         <input type="text" name='otp'
                                                             class="w-1/3  bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded " />
                                                     </center>
                                                     <a href="resend">
                                                         <h2 Class="text-center text-primary font-semibold text-sm ">Resend
                                                         </h2>
                                                     </a>
                                                 </div>
                                                 <div
                                                     class=" flex item-center justify-center bg-gray-200 px-4 py-3 text-right">

                                                     <button type="submit"
                                                         class="py-2 px-4 bg-primary text-white rounded hover:bg-blue-700 mr-2"
                                                         onclick="toggleModal()"></i> Ok</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="mymodal">
                                 <div
                                     class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                     <div class="fixed inset-0 transition-opacity">
                                         <div class="absolute inset-0 bg-gray-900 opacity-75" />
                                     </div>
                                     <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                     <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                         role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                         <form action="{{ url('admin/update/password') }}" method="post">
                                             {{ csrf_field() }}@method('put')
                                             <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                                                 <h2 class="border-b border-blue-100 py-2 text-gray-500 font-semibold">
                                                     Change
                                                     Password </h2>
                                                 <p class="text-green-500 text-sm  mt-4 mb-4">Creat a new Secure password.
                                                 </p>

                                                 <h2 Class=" text-gray-500 font-semibold text-sm ">Current Password</h2>

                                                 <input type="password" name='old_password'
                                                     class="w-3/4 bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded "
                                                     required />
                                                 <h2 Class=" text-gray-500 font-semibold text-sm ">New Password</h2>

                                                 <input type="password" name='new_password'
                                                     class="w-3/4 bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded "
                                                     required />

                                             </div>
                                             <div class=" flex item-center justify-center bg-gray-200 px-4 py-3 text-right">

                                                 <button type="submit"
                                                     class="py-2 px-4 bg-primary text-white rounded hover:bg-blue-700 mr-2"
                                                     onclick="toggleModal2()"></i>
                                                     Submit</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                         </div>

                     </div>
                 </div>
             </div>

         </div>
         </div>
     </main>
 @endsection

 <script>
     function toggleModal() {
         document.getElementById('modal').classList.toggle('hidden')
     }

     function toggleModal2() {
         document.getElementById('mymodal').classList.toggle('hidden')
     }
 </script>

 @if (!empty(Session::get('message')) && Session::get('message') == 5)
     <script>
         function toggleModal2() {
             document.getElementById('mymodal').classList.toggle('hidden')
         }
     </script>
 @endif

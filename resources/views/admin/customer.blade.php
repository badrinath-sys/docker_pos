 @extends('admin/layout')
 @section('container')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

<main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">CUSTOMERS</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                             <tr>
                                                 <th scope="col">S.No</th>
                                                 <th scope="col">Name</th>
                                                 <th scope="col">Mobile Number</th>
                                                 <th scope="col">Created at</th>

                                                 <th scope="col">Updated at</th>
                                                 <th scope="col">Action</th>

                                           


                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php   $i=1  ?>
                                             @foreach($data as $list)
                                             <tr>
                                                 <td>
                                                     {{$i++ }}

                                                 </td>
                                                 <td>
                                                     {{ $list['name'] }}
                                                 </td>

                                                 <td>
                                                     {{ $list['mobile'] }}
                                                 </td>
                                                 <td class="text-primary">

                                                     {{ $list['created_at'] }} <span>
                                                 </td>
                                                 <td class="text-primary">
                                                     {{ $list['updated_at'] }}
                                                 </td>

                                                 <td>
                                                     <a href="{{url('admin/customer/delete/')}}/{{$list->id}}">
                                                     <div >
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-700 hover:text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>
</div></a>
                                                 </td>
                                             </tr>
                                             <tr>

                                             </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                 </div>








                             </div>
                         </div>
                     </div>
                 </div>



             </div>

         </div>
 </main>
 @endsection
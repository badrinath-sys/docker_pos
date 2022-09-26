 @extends('admin/layout')
 @section('container')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

 <main class="py-4 bg-surface-secondary">

     <div class="container-fluid">

         <div class="row g-6 mb-4 ">
             <div class="col-xl-12 col-sm-12 col-12">
                 <div class="card shadow border-0">
                     <div class="card-body -mt-5 -mb-4">
                         <div class="row">
                             <div class="col mt-10">

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

                                                 <th></th>


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
                                                 <td>

                                                     {{ $list['created_at'] }} <span>
                                                 </td>
                                                 <td>
                                                     {{ $list['updated_at'] }}
                                                 </td>

                                                 <td>
                                                     <a href="{{url('admin/customer/delete/')}}/{{$list->id}}">
                                                         <button type="button"
                                                             class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                             <i class="bi bi-trash"></i>
                                                         </button></a>
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
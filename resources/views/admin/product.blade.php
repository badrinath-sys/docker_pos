@extends('admin/layout')

@section('container')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif


<br>
@if(Session('role')=='Admin')
<a href="product/add_product">
    <button type="button" class="btn btn-success btn btn-primary btn-sm">
        Add product 
    </button>
</a>
@endif
<br>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                     <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Barcode</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    @if(Session('role')=='Admin')
                                    <th scope="col">Action</th>
                                    @endif
                                    
                                </tr>
                </thead>
                <tbody>
                 <?php   $i=1  ?>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$i++ }}</td>
                        <td>{{$list->product_name}}</td>
                         <td>
                            @if($list->image!='')

                            <img width="50px" src="{{asset('storage/media/'.$list->image)}}"/>

                            @endif
                            </td>
                        <td>{{$list->barcode}}</td>
                        <td>{{$list->price}}</td>
                        <td>{{$list->quantity}}</td>
                        <td>
                           @if($list['status']==1)
                           <button type="button" class="btn btn-primary btn btn-primary btn-sm">In Stock</button>
                          @elseif($list['status']==0)
                         <button type="button" class="btn btn-warning btn btn-primary btn-sm">Out of Stack</button>
                        @endif
                        </td>
                        @if(Session('role')=='Admin')
                        <td>
                        <div class="btn-group">
                             <form action="{{url('admin/product/')}}/{{$list->id}}" method="post">
                              @csrf @method('DELETE')
                          <button type="submit" class="btn btn-danger btn btn-primary btn-sm mb-2 mr-2">Delete</button>
                            </form>
                              <form action="{{url('admin/product/')}}/{{$list->id}}" method="post">
                              @csrf @method('GET')
                            <button type="submit" class="btn btn-success btn btn-primary btn-sm mb-2 mr-2">Edit</button></form>
                            </div>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

@endsection
@extends('admin/layout')

@section('container')

@if($id>0)
@php
$image_required="";
@endphp
@else
@php
$image_required="required";
@endphp
@endif

<h4 class="mb-4 mt-4">Manage Product</h4>
<a href="{{url('admin/product')}}">
    <button type="button" class=" text-white bg-primary btn-sm  mb-4 ">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
</svg>



    </button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url( 'admin/product/')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf 
                            <div class="form-group">
                                <label for="product_name" class="control-label mb-2">Product Name</label>
                                <input id="product_name" value="{{$product_name}}" name="product_name" type="text"
                                    class="form-control mb-4" aria-required="true" aria-invalid="false" required>
                                @error('product_name')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label mb-2"> Image</label>
                                <input id="image"  value="{{$image}}" name="image" type="file" class="form-control mb-4" aria-required="true"
                                    aria-invalid="false" {{$image_required}}>
                                @error('image')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                @if($image!='')
                                <a href="{{asset('storage/media/'.$image)}}" target="_blank"><img width="100px"
                                        src="{{asset('storage/media/'.$image)}}" /></a>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="barcode" class="control-label mb-2"> Barcode</label>
                                <input id="barcode" value="{{$barcode}}" name="barcode" type="text" class="form-control mb-4"
                                    aria-required="true" aria-invalid="false" required>
                                @error('barcode')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price" class="control-label mb-2"> Price</label>
                                <input id="price" value="{{$price}}" name="price" type="text" class="form-control mb-4"
                                    aria-required="true" aria-invalid="false" required>
                                @error('price')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="control-label mb-2"> Quantity</label>
                                <input id="quantity" value="{{$quantity}}" name="quantity" type="text"
                                    class="form-control " aria-required="true" aria-invalid="false" required>
                                @error('quantity')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <br>
                                
                                <button id="payment-button" type="submit" class="py-2 px-4 bg-primary text-white rounded  " >Submit</button>
                            </div>
                            <input type="hidden" name="id" value="{{$id}}" />
                        </form>
                    </div>
                </div>
            </div>






        </div>

    </div>
</div>

@endsection

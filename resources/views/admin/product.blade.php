@extends('admin/layout')

@section('container')
    @if (Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <h5 class="mb-0">PRODUCTS<span class="pl-4">
                            @if (Session('role') == 'Admin')
                                <a href="product/add_product">
                                    <button type="button" class=" btn-primary bg-primary btn-sm ">
                                        Add
                                    </button>
                                </a>
                        </span>
                    </h5>
                    @endif
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                @if (Session('role') == 'Admin')
                                    <th scope="col">Action</th>
                                @endif

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data as $list)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $list->product_name }}</td>
                                    <td>
                                        @if ($list->image != '')
                                            <img width="50px" src="{{ asset('storage/media/' . $list->image) }}" />
                                        @endif
                                    </td>
                                    <td>{{ $list->barcode }}</td>
                                    <td>{{ $list->price }}</td>
                                    <td>{{ $list->quantity }}</td>
                                    <td>
                                        @if ($list['status'] == 1)
                                            In Stock
                                        @elseif($list['status'] == 0)
                                            Out of Stack
                                        @endif
                                    </td>
                                    @if (Session('role') == 'Admin')
                                        <td>
                                            <div class="btn-group">
                                                <form action="{{ url('admin/product/') }}/{{ $list->id }}"
                                                    method="post">
                                                    @csrf @method('POST')
                                                    <a href="#" class="text-sm text-blue-500  ">Edit</a>
                                                </form>
                                                <form action="{{ url('admin/product/') }}/{{ $list->id }}"
                                                    method="post">
                                                    @csrf @method('GET')
                                                    <div class="pl-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4 text-gray-700 hover:text-red-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </div>

                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>
@endsection

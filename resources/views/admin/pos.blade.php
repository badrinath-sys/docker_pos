@extends('admin/layout') @section('container')

    @if (Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <main class="py-4 bg-surface-secondary">
        <form action="{{ route('admin.search') }}" method="get">
            <div class="input-group relative flex flex-wrap items-stretch w-1/2 mb-4 ml-6">
                <input type="search"
                    class="form-control relative flex-auto min-w-0 block w-1/2 px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search">
            </div>
            @if (!empty($item))
                @foreach ($item as $list)
                    @if ($list->image != '')
                        <a onclick="toggleModal1()">

                            <img width="60px" src="{{ asset('storage/media/' . $list->image) }}"
                                style=" display:inline-flex" /></a>
                    @endif
                @endforeach
            @endif
        </form>
        <div class="container-fluid">
            <div class="row g-6 mb-4 ">
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="card shadow border-0">
                        <div class="card-body -mt-5 -mb-4">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('add_to_cart') }}" method="post"> {{ csrf_field() }}
                                        <div class="card-header">

                                            <input
                                                class="shadow appearance-none border rounded lg:w-56 md:w-44  py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline"
                                                type="text" placeholder="Bar Code" name="barcode">
                                            <button class="btn-primary bg-primary btn-sm"> Add
                                            </button>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-nowrap">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Value</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody> @php $total = 0 @endphp
                                                @if (session('cart'))
                                                    @foreach (session('cart') as $id => $details)
                                                        @php$total += $details['price'] * $details['quantity'];
                                                                                                                @endphp ?>
                                                        <tr>
                                                            <td> <a class="text-heading font-semibold" href="#">
                                                                    {{ $details['name'] }}
                                                                </a> </td>
                                                            <td>
                                                                <a class="text-heading font-semibold" href="#"> <img
                                                                        width="50px"
                                                                        src="{{ asset('storage/media/' . $details['image']) }}" />
                                                                </a>
                                                            </td>
                                                            <td> ₹{{ $details['price'] }} </td>
                                                            <td>
                                                                <div
                                                                    class="flex flex-row h-6 w-10 rounded relative bg-transparent mt-1">
                                                                    <input type="number"
                                                                        class="outline-none focus:outline-none text-center w-full bg-white 
                                                                border border-solid border-gray-300 rounded font-normal text-sm hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                                                        name="custom-input-number"
                                                                        value="{{ $details['quantity'] }}" />
                                                                </div>
                                                            </td>
                                                            <td>₹{{ $details['price'] * $details['quantity'] }}</td>
                                                            <td>
                                                                <a href="{{ url('admin/delete/') }}/{{ $details['id'] }}">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                                        <i class="bi bi-trash"></i> </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class='flex  justify-end mt-6'>
                                        <h3 class="text-gray-500   pb-5 ">
                                            <span>Total :</span>
                                            <span class="ml-1 text-primary">₹{{ $total }}</span>
                                        </h3>
                                    </div>
                                    <div class="flex  justify-end mb-4 ">
                                        <button class="py-2 px-4 bg-primary text-white rounded mr-3 "
                                            onclick="toggleModal()">Submit</button>
                                        <a href="{{ url('admin/remove') }}">
                                            <button
                                                class="bg-gray-200 text-gray-500 font-normal hover:bg-gray-300 py-2 px-4  rounded">
                                                Cancel </button>
                                        </a>
                                    </div>
                                    <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
                                        <div
                                            class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <div class="fixed inset-0 transition-opacity">
                                                <div class="absolute inset-0 bg-gray-900 opacity-75" />
                                            </div> <span
                                                class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                            <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                <form action="{{ url('admin/checkout') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <label>Mobile Number</label>
                                                        <input type="text"
                                                            class="w-full bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded "
                                                            name="mobile" />
                                                        <label>User Name</label>
                                                        <input type="text"
                                                            class="w-full bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded  "
                                                            name="name" />
                                                        <label>Amount</label>
                                                        <input type="text"
                                                            class="w-full bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded  "
                                                            value="₹{{ $total }}" name="amount" />
                                                        <label>Payment</label>
                                                        <select
                                                            class="form-select appearance-none
                                          block
                                          w-full
                                          px-3
                                          py-1.5
                                          text-base
                                          font-normal
                                          text-gray-700
                                          bg-white bg-clip-padding bg-no-repeat
                                          border border-solid border-gray-300
                                          rounded
                                          transition
                                          ease-in-out
                                          mt-2
                                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                            name="payment_type" aria-label="Default select example">
                                                            <option selected>Payment Option</option>
                                                            <option value="Gpay">Gpay</option>
                                                            <option value="PhonePay">Phonepay</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                    <div class="px-4 py-3 text-right">
                                                        <button type="button"
                                                            class="py-2 px-4 bg-gray-200  rounded hover:bg-gray-400 mr-2"
                                                            onclick="toggleModal()"><i class="fas fa-times"></i>
                                                            Cancel</button>
                                                        <button type="submit" name="submit"
                                                            class="py-2 px-4 bg-primary text-white rounded hover:bg-blue-700 mr-2">
                                                            </i> Submit</button>
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
            <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal1">
                <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-900 opacity-75" />
                    </div> <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                    <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                        role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            @if (!empty($item))
                                @foreach ($item as $list)
                                    <h3> <label>Product Name:{{ $list['product_name'] }}</label></h3>
                                    <br>
                                    <h3> <label>Price:₹{{ $list['price'] }}</label></h3>
                                    <br>
                                    <h3> <label>Barcode:{{ $list['barcode'] }}</label></h3>
                                    <br>
                                @endforeach
                            @endif
                            <div class="">
                                <button type="button"
                                    class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2"
                                    onclick="toggleModal1()"><i class="fas fa-times"></i> Cancel</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    </main>
@endsection
<script>
    function toggleModal() {
        document.getElementById('modal').classList.toggle('hidden')
    }

    function toggleModal1() {
        document.getElementById('modal1').classList.toggle('hidden')
    }
</script>

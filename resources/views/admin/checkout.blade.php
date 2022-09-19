@extends('admin/layout')

@section('container')



<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
    <label>Mobile Number</label>
    <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded "
        name="mobile" />
    <label>User Name</label>
    <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded  "
        name="name" />


    <label>Amount</label>
    <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3 border border-solid border-gray-300 rounded"
        value="₹{{$total}}" name="amount" />

    <label>Payment</label>
    <select class="form-select appearance-none
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
        aria-label="Default select example">
        <option selected>Payment Option</option>
        <option value="1">Gpay</option>
        <option value="2">Phonepay</option>
        <option value="3">Cash</option>
    </select>
</div>



<button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i
        class="fas fa-times"></i> Cancel</button>

<form action="" method="post">
    {{ csrf_field() }}
    <button type="button" class="py-2 px-4 bg-primary text-white rounded hover:bg-blue-700 mr-2"></i> Submit</button>

</form>

@endsection

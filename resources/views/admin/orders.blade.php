  @extends('admin/layout')
  @section('container')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif


      <form action="{{route('admin.order_search')}}" method="get">
          <div class="input-group relative flex flex-wrap items-stretch w-1/2 mb-1 pt-8 ml-6">
              <input type="search"
                  class="form-control relative flex-auto min-w-0 block w-1/2 px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Search" aria-label="Search" aria-describedby="button-addon2">



          </div>
          </from>
          <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">ORDERS</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                                  <tr>
                                                      <th scope="col">Order ID</th>
                                                      <th scope="col">Customer Name</th>
                                                      <th scope="col">Payment Type</th>
                                                      <th scope="col">Total</th>
                                                      <th scope="col">Status</th>
                                                      <th scope="col">Date & Time</th>
                                                      <th scope="col">Action</th>

                                                   


                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @if(!empty($item))
                                                  @foreach($item as $item)
                                                  <tr>
                                                      <td></td>
                                                      <td>{{$item['name']}}</td>
                                                      <td>{{$item['payment_type']}}</td>
                                                      <td>{{$item['amount']}}</td>
                                                      <td>{{$item['status']}}</td>
                                                      <td>{{$item['created_at']}}</td>

                                                  </tr>
                                                  @endforeach
                                                  @endif
                                              </tbody>

                                              <tbody>
                                                  <tr>
                                                      <?php   $i=1  ?>
                                                      @foreach($data as $list)
                                                      <td>
                                                          {{$i++}}
                                                      </td>
                                                      <td>
                                                          {{$list['name']}}
                                                      </td>
                                                      <td>
                                                          {{$list['payment_type']}}
                                                      </td>
                                                      <td>₹{{$list['amount']}}

                                                      </td>
                                                      <td class="text-green-400 font-bold">{{$list['status']}}

                                                      </td>
                                                      <td class="text-primary">{{$list['created_at']}}

                                                      </td>
                                                      <td>
                                                          <a href="{{url('admin/order/delete/')}}/{{$list->id}}">
                                                            <div>
                                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-700 hover:text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg></a>
</div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      @endforeach
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>

                                      <div class="flex flex-row mx-auto justify-end mt-6 mb-4">
                                          <button type="button"
                                              class="bg-gray-800 text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-red-700 hover:text-white px-3">
                                              <div class="flex flex-row align-middle">
                                                  <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd"
                                                          d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                                          clip-rule="evenodd"></path>
                                                  </svg>
                                                  <p class="ml-2">Prev</p>
                                              </div>
                                          </button>
                                          <button type="button"
                                              class="bg-gray-800 text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-red-700 hover:text-white px-3">
                                              <div class="flex flex-row align-middle">
                                                  <span class="mr-2">Next</span>
                                                  <svg class="w-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd"
                                                          d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                  </svg>
                                              </div>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
</div>

                  </div>

              </div>
  </main>
  @endsection
@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>



        <section class="">


            {{-- <a href="{{ route('category.create') }}"><button class="btn_show_product">Add Category</button></a> --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                  <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                      <tr>
                          {{-- <th scope="col" class="px-6 py-3">#</th> --}}
                          <th scope="col" class="px-6 py-3">user name</th>
                          <th scope="col" class="px-6 py-3">price</th>
                          <th scope="col" class="px-6 py-3">quantity</th>
                          {{-- <th scope="col" class="px-6 py-3">total price</th> --}}
                          {{-- <th scope="col" class="px-6 py-3">product name</th>
                          <th scope="col" class="px-6 py-3">price</th>
                          <th scope="col" class="px-6 py-3">quantity</th> --}}

                      </tr>
                  </thead>
                  {{-- <tbody>

                                @foreach ($bills as $bill)


                                        <tr class="border-b  dark:border-gray-700 table_color">
                                            <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{ $bill->id }}</th>
                                            <td class="px-6 py-4 table_padding">{{  $bill->user->name }}</td>
                                            <td class="px-6 py-4 table_padding">{{  $bill->is_payment }}</td>
                                            <td class="px-6 py-4 table_padding" style=" display: flex; margin-top: 20px;">
                                                <a href="{{ route('bill.edit',$bill->id) }}" class="btn_update">Update</a>

                                                    <a href="{{ route('bill.show',$bill->id)}}"><button class="btn_delete" type="submit">Details</button></a>

                                            </td>




                                        </tr>
                                @endforeach




                  </tbody> --}}
                  <tbody>

{{-- @dd($bill); --}}
            @foreach ($bill->products as $mybill)

            {{-- @dd($mybill); --}}
             {{-- @foreach ($mybill->user->products as $product) --}}
              {{-- @dd( $product); --}}
                    <tr class="border-b  dark:border-gray-700 table_color">
                       {{-- <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{ $mybill->id }}</th> --}}
                        <td class="px-6 py-4 table_padding">{{  $mybill->name }}</td>
                        <td class="px-6 py-4 table_padding">{{  $mybill->pivot->price }}</td>
                        <td class="px-6 py-4 table_padding">{{  $mybill->pivot->quantity }}</td>
                         {{-- <td class="px-6 py-4 table_padding">{{  $product->name }}</td>  --}}
                        {{-- <td class="px-6 py-4 table_padding">{{ $mybill->cart->price }}</td> --}}
                        {{-- <td class="px-6 py-4 table_padding">{{ $mybill->cart->quantity }}</td>  --}}



                    </tr>
             {{-- @endforeach --}}
            @endforeach




                   </tbody>
              </table>
            </div>
        </section>





        </div>
    </div>
@endsection

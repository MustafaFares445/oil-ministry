@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>



                <!-- start section category -->
    {{-- <div class="container"> --}}
        <section class="">


            <a href="{{ route('product.create') }}"><button class="btn_show_product">Add Product</button></a>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                  <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                      <tr>
                          <th scope="col" class="px-6 py-3">#</th>
                          <th scope="col" class="px-6 py-3">productName </th>
                          <th scope="col" class="px-6 py-3">price</th>
                          <th scope="col" class="px-6 py-3">rating</th>
                          <th scope="col" class="px-6 py-3">photo</th>
                          <th scope="col" class="px-6 py-3">category_name</th>
                          <th scope="col" class="px-6 py-3">recipe_name</th>

                          <th scope="col" class="px-6 py-3">Pro</th>
                      </tr>
                  </thead>
                  <tbody>


                    @foreach ($products as $product)
                    <tr class="border-b  dark:border-gray-700 table_color">
                        <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{$product->id}}</th>
                        <td class="px-6 py-4 table_padding">{{$product->name}}</td>
                        <td class="px-6 py-4 table_padding">{{$product->price}}</td>
                        <td class="px-6 py-4 table_padding">{{$product->rating}}</td>
                        <td class="table_padding"><img  style="width: 80px; height: 80px;" src="{{asset('images/' .$product->image)}}">
                        </td>
                        <td class="px-6 py-4 table_padding">{{$product->category->name}}</td>
                        <td class="px-6 py-4 table_padding">{{$product->recipe->name ?? ''}}</td>
                        <td class="px-6 py-4 table_padding" style=" display: flex; margin-top: 20px;">
                            <a href="{{ route('product.edit',$product->id) }}" class="btn_update">Update</a>
                            <form action="{{ route('product.destroy',$product->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn_delete" type="submit">Delete</button>
                            </form>

                        </td>

                    </tr>
                    @endforeach




                  </tbody>
              </table>
            </div>
        </section>
        {{-- </div> --}}
          <!-- end section category -->




        </div>
    </div>
@endsection

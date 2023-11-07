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


            <a href="{{ route('category.create') }}"><button class="btn_show_product">Add Category</button></a>
            {{-- <form action="{{ route('category.delall') }}" method="POST">
                @method('delete')
                @csrf
                <button class="btn_show_product" type="submit">Delete All Category</button>
            </form> --}}

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                  <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                      <tr>
                          <th scope="col" class="px-6 py-3">#</th>
                          <th scope="col" class="px-6 py-3">categoryName </th>
                          <th scope="col" class="px-6 py-3">Parent_id</th>
                          <th scope="col" class="px-6 py-3">photo</th>

                          <th scope="col" class="px-6 py-3">Pro</th>
                      </tr>
                  </thead>
                  <tbody>


                    @foreach ($categories as $category)
                    <tr class="border-b  dark:border-gray-700 table_color">
                        <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{$category->id}}</th>
                        <td class="px-6 py-4 table_padding">{{$category->name}}</td>
                        <td class="px-6 py-4 table_padding">{{$category->parent_id}}</td>
                        <!-- <td><img  style="width: 90px; height: 90px;" src="
                            {{-- {{asset('images/aminal/'.$animals->photo)}} --}}
                            "></td> -->
                        <td class="table_padding"><img  style="width: 80px; height: 80px;" src="{{asset('images/' .$category->image)}}">
                        </td>

                        <td class="px-6 py-4 table_padding" style=" display: flex; margin-top: 20px;">
                            <a href="{{ route('category.edit',$category->id) }}" class="btn_update">Update</a>
                            <form action="{{ route('category.destroy',$category->id)}}" method="POST">
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

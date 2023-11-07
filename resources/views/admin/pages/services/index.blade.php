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


            <a href="{{ route('services.create') }}"><button class="btn_show_product">{{__("Add Service")}}</button></a>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                  <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                      <tr>
                          <th scope="col" class="px-6 py-3">#</th>
                          <th scope="col" class="px-6 py-3">Service Name </th>
                      </tr>
                  </thead>
                  <tbody>


                    @foreach ($services as $service)
                    <tr class="border-b  dark:border-gray-700 table_color">
                        <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{$service->id}}</th>
                        <td class="px-6 py-4 table_padding">{{$service->name}}</td>
                            <a href="{{ route('services.edit',$service) }}" class="btn_update">Update</a>
                            <form action="{{ route('services.destroy',$service)}}" method="POST">
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

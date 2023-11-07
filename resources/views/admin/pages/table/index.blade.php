@extends('admin.layouts.app')
@section('content')
    {{-- <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>



                <!-- start section category -->
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex justify-end m-2 p-2">
                            <a href="{{ route('tables.create') }}"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Table</a>
                        </div>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow-md sm:rounded-lg">
                                        <table class="min-w-full">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Name
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Guest
                                                    </th>
                                                    <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    image
                                                </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Staus
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Location
                                                    </th>
                                                    <th scope="col" class="relative py-3 px-6">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tables as $table)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $table->name }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $table->chaire->name }}
                                                        </td>
                                                        <td
                                                        img  style="width: 80px; height: 80px;  margin-left:auto;"
                                                         src="{{ asset('images/' . $table->image) }}">
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $table->status }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $table->location}}
                                                        </td>
                                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                            <div class="flex space-x-2">
                                                                {{-- <a href="{{ route('admin.tables.edit', $table->id) }}" --}}
                                                                    {{-- class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a> --}}
                                                                {{-- <form
                                                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                                    method="POST"
                                                                    action="{{ route('admin.tables.destroy', $table->id) }}"
                                                                    onsubmit="return confirm('Are you sure?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit">Delete</button>
                                                                </form> --}}
                                                            {{-- </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
          <!-- end section category -->




        {{-- </div>
    </div> --}}

    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>

            <section>
                <a href="{{ route('tables.create') }}"><button class="btn_show_product">Add Table</button></a>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                        <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">Name </th>
                                <th scope="col" class="px-6 py-3">photo</th>
                                <th scope="col" class="px-6 py-3">ChairNumber</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Location</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tables as $table)
                                <tr class="border-b  dark:border-gray-700 table_color">
                                    <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{ $table->id }}</th>
                                    <td class="px-6 py-4 table_padding">{{ $table->name }}</td>
                                    <td class="table_padding"><img style="width: 80px; height: 80px;"src="{{ asset('images/' . $table->image) }}">></td>
                                    <td class="px-6 py-4 table_padding"> {{ $table->chaire->name }}</td>
                                    <td class="px-6 py-4 table_padding"> {{ $table->status }}</td>
                                    <td class="px-6 py-4 table_padding"> {{ $table->location}}</td>
                                    <td class="px-6 py-4 table_padding" style=" display: flex; margin-top: 20px;">
                                        <a href="{{ route('tables.edit', $table->id) }}" class="btn_update">Update</a>
                                        <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
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
            <!-- end section recipe -->
        </div>
    </div>
@endsection

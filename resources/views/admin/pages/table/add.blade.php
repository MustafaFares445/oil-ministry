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
                    <div class="flex m-2 p-2">
                        <a href="{{ route('tables.index') }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
                    </div>
                    <div class="m-2 p-2 bg-slate-100 rounded">
                        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                            <form method="POST" action="{{ route('tables.store') }}" enctype='multipart/form-data'>
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="name"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form_box ">
                                    <label for="exampleInputEmail1" class="form_label "> Chaire Number</label>
                                    <select type="text" class="form_input" id=chaire_id  name=chaire_id >
                                      @foreach ($chaires as $chaire)
                                      <option value="{{$chaire->id}}">{{$chaire->name  }}</option>
                                  @endforeach
                                   </select>
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="image" class="block text-sm font-medium text-gray-700"> Guest Number
                                    </label>
                                    <div class="mt-1">
                                        <input type="file" id="image" name="image"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('image')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <div class="mt-1">
                                        <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                            @foreach (App\Enums\TableStatus::cases() as $status)
                                                <option value="{{ $status->value }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- @error('status') --}}
                                        {{-- <div class="text-sm text-red-400">{{ $message }}</div> --}}
                                    {{-- @enderror --}}
                                {{-- </div>
                                <div class="sm:col-span-6 pt-5">
                                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                    <div class="mt-1">
                                        <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                            @foreach (App\Enums\TableLocation::cases() as $location)
                                                <option value="{{ $location->value }}">{{ $location->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('location')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-6 p-4">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div> --}}
            <!-- start section category -->




        {{-- </div>
    </div> --}}
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>



            <!-- start section table -->
            <section class="add_category" id="add_category">

                {{-- <div class="container"> --}}
                    <h1 class="product_title">Add Table</h1>
                    <br>
                    {{-- <div class="flex m-2 p-2">
                        <a href="{{ route('tables.index') }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
                    </div> --}}
                    <br>
                    <form method="POST" action="{{ route('tables.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form_container ">
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label"> Name</label>
                                <input type="text" class="form_input "id="name" name="name"
                                    placeholder="Enter Category name">
                                        @error('name')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Photo</label>
                                <input type="file" class="form_input form_control" id="image" name="image">
                                @error('image')
                                <div class ="text-danger">{{  $message }}</div>
                                @enderror
                            </div>
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label"> Chaire Number</label>
                                <select  id=chaire_id  name=chaire_id class="form-control">
                                    <option selected disabled value="">select the chaire</option>
                                    @foreach ($chaires as $chaire)
                                    <option value="{{$chaire->id}}">{{$chaire->name  }}</option>
                                @endforeach
                                </select>
                                        @error('chaire_id')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>

                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label"> Location </label>
                                <select id="location" name="location" class="form-control">
                                    <option selected disabled value="">select the location</option>
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                                @endforeach
                                </select>
                                        @error('location')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label"> Status </label>
                                <select  id="status" name="status" class="form-control">
                                    <option selected disabled value="">select the status</option>
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                                <option value="{{ $status->value }}">{{ $status->name }}</option>
                                            @endforeach
                                </select>
                                        @error('status')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>

                            {{-- <div class="form-group m-4">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option selected disabled value="">select the category</option>
                                    @foreach ($categories as $category )
                                    {{-- <option {{$category['id'] == $blog['category_id'] ? 'selected' : '' }} value="{{$category['id']}}">{{$category['name']}}</option> --}}
                                    {{-- <option @selected($category['id'] == $blog['category_id'])>{{$category['name']}}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Category Type</label>
                                <input type="text" class="form_input " name="type"
                                    placeholder="Enter Category Type">
                                    @error('type')
                                    <div class ="text-danger">{{  $message }}</div>
                                    @enderror
                            </div> --}}

</div>

                        <button type="submit" class="btn btn_save">save </button>
                    </form>

                {{-- </div> --}}

            </section>
            <!-- start section table -->




        </div>
    </div>
@endsection

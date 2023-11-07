@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>
            <!-- start section category -->
            <section class="add_category" id="add_category">

                {{-- <div class="container"> --}}
                    <h1 class="product_title">{{__("Add Service")}}</h1>
                    <br>

                    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form_container ">
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Service Name</label>
                                <input type="text" class="form_input " name="name"
                                    placeholder="Enter Category name">
                                        @error('name')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>
                            <div class="form-group m-4">
                        </div>
                        <button type="submit" class="btn btn_save">save </button>
                    </form>

                {{-- </div> --}}

            </section>
            <!-- start section category -->
        </div>
    </div>
@endsection

@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>

            <!-- start section recipe -->
            <section class="add_recipe" id="add_recipe">
                <h1 class="product_title">Add Recipe</h1>
                <br>
                <form method="POST" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form_container ">
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Recipe Name</label>
                            <input type="text" class="form_input " name="name" placeholder="Enter Recipe Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Photo</label>
                            <input type="file" class="form_input form_control" name="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Component</label>
                            <input type="text" class="form_input " name="component" placeholder="Enter component">
                            @error('component')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Prepare</label>
                            <input type="text" class="form_input " name="prepare" placeholder="Enter Prepare">
                            @error('prepare')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn_save">save</button>
                </form>
            </section>
            <!-- end section recipe -->
        </div>
    </div>
@endsection

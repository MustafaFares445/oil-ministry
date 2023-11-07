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
                    <h1 class="product_title">Add Product</h1>
                    <br>

                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form_container ">
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Category Name</label>
                                <input type="text" class="form_input " name="name"
                                    placeholder="Enter Category name">
                                        @error('name')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Photo</label>
                                <input type="file" class="form_input form_control" name="image">
                                @error('image')
                                <div class ="text-danger">{{  $message }}</div>
                                @enderror
                            </div>
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Price</label>
                                <input type="text" class="form_input " name="price"
                                    placeholder="Enter Price">
                                        @error('price')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">rating</label>
                                <input type="text" class="form_input " name="rating"
                                    placeholder="Enter rating">
                                        @error('rating')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>
                            
                            <div class="form-group m-4">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    {{-- <option disabled selected value="selesct the category"></option>  --}}
                                    <option disabled value="selesct the category"></option> 
                                    @foreach ($categories as $category )
                                    <option value="{{$category ['id']}}">{{$category ['name']}}</option> 
                                    {{-- <option @selected($category ['id'] == $product['category_id']) --}}
                                    
                                    value="{{$category ['id']}}">{{$category ['name']}}</option> 
                                    @endforeach
                               
                                    
                                </select>
                            </div>
                            <div class="form-group m-4">
                                <label for="category_id">Recipe</label>
                                <select name="recipe_id" id="recipe_id" class="form-control">
                                    {{-- <option disabled selected value="selesct the category"></option>  --}}
                                    <option disabled value="selesct the recipe"></option> 
                                    @foreach ($recipes as $recipe )
                                    <option value="{{$recipe ['id']}}">{{$recipe ['name']}}</option> 
                                    {{-- <option @selected($recipe['id'] == $product['recipe_id']) --}}
                                    
                                    value="{{$recipe ['id']}}">{{$recipe ['name']}}</option> 
                                    @endforeach
                               
                                    
                                </select>
                            </div>




                        </div>

                        <button type="submit" class="btn btn_save">save </button>
                    </form>

                {{-- </div> --}}

            </section>
            <!-- start section category -->




        </div>
    </div>
@endsection

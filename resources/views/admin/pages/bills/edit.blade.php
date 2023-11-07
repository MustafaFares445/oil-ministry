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
                    <h1 class="product_title"> Edit Product</h1>
                    <br>

                    <form method="POST" action="{{ route('bill.update',$bill->id) }}" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                        <div class="form_container ">
                            <div class="form_box">
                                <label for="exampleInputEmail1" class="form_label">Is_payment</label>
                                <select name="is_payment" id="is_payment" class="form-control">
                                    <option @selected('0' == $bill['is_payment']) value="0">0</option>
                                    <option @selected('1' == $bill['is_payment']) value="1">1</option>
                                </select>
                                {{-- <input type="text" class="form_input " name="is_payment"
                                value="{{$bill->is_payment}}"> --}}
                                        @error('is_payment')
                                        <div class ="text-danger">{{  $message }}</div>
                                        @enderror
                            </div>

                        </div>

                        <button type="submit" class="btn btn_save">save </button>
                    </form>
            </section>




        </div>
    </div>
@endsection

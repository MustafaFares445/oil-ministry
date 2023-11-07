@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>

            <!-- start section user -->
            <section class="add_user" id="add_user">
                <h1 class="product_title">Edit Client</h1>
                <br>
                <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form_container ">
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">User Name</label>
                            <input type="text" class="form_input " name="name" value="{{ $user->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Email</label>
                            <input type="text" class="form_input " name="email" value="{{ $user->email }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Password</label>
                            <input type="text" class="form_input " name="password" value="{{ $user->password }}">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form_box">
                            <label for="exampleInputEmail1" class="form_label">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option @selected('0' == $user['role']) value="0">0</option>
                                <option @selected('1' == $user['role']) value="1">1</option>
                            </select>
                            {{-- <input type="text" class="form_input " name="role" value="{{ $user->role }}"> --}}
                            @error('role')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                    <button type="submit" class="btn btn_save">save </button>
                </form>
            </section>
            <!-- start section category -->
        </div>
    </div>
@endsection

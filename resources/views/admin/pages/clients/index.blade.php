@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>

            <section>
                {{-- <a href="{{ route('recipe.create') }}"><button class="btn_show_product">Add Recipe</button></a> --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                        <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">name</th>
                                <th scope="col" class="px-6 py-3">email</th>
                                <th scope="col" class="px-6 py-3">password</th> 
                                <th scope="col" class="px-6 py-3">role</th> 
                                <th scope="col" class="px-6 py-3">Pro</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr class="border-b  dark:border-gray-700 table_color">
                                    <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{ $user->id }}</th>
                                    <td class="px-6 py-4 table_padding">{{ $user->name }}</td>
                                    <td class="px-6 py-4 table_padding">{{ $user->email }}</td>
                                    <td class="px-6 py-4 table_padding">{{ $user->password }}</td>
                                    <td class="px-6 py-4 table_padding">{{ $user->role }}</td>
                                    <td class="px-6 py-4 table_padding" style=" display: flex; margin-top: 20px;">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn_update">Update</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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

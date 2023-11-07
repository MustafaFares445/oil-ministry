@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="container_fluid_image_top_left"></div>
            <div class="container_fluid_image_bottom_left"></div>
            <div class="container_fluid_image_bottom_right"></div>
            <div class="container_fluid_image_top_right"></div>

            <section>
                <a href="{{ route('recipe.create') }}"><button class="btn_show_product">Add Recipe</button></a>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dash_table">
                        <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 table_color">
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">recipeName </th>
                                <th scope="col" class="px-6 py-3">photo</th>
                                <th scope="col" class="px-6 py-3">component</th>
                                <th scope="col" class="px-6 py-3">prepare</th>
                                <th scope="col" class="px-6 py-3">Pro</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($recipes as $recipe)
                                <tr class="border-b  dark:border-gray-700 table_color">
                                    <th scope="row" class="px-6 py-4 table_padding whitespace-nowrap ">{{ $recipe->id }}</th>
                                    <td class="px-6 py-4 table_padding">{{ $recipe->name }}</td>
                                    <td class="px-6 py-4 table_padding">{{ $recipe->component }}</td>
                                    <td class="px-6 py-4 table_padding">{{ $recipe->prepare }}</td>
                                    <td class="table_padding"><img style="width: 80px; height: 80px;"src="{{ asset($recipe->image) }}"></td>
                                    <td class="px-6 py-4 table_padding" style=" display: flex; margin-top: 20px;">
                                        <a href="{{ route('recipe.edit', $recipe->id) }}" class="btn_update">Update</a>
                                        <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST">
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

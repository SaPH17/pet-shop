@extends('layouts.app')

@section('content')

    <div class="px-48 py-12">
        <div class="pb-3 text-3xl font-bold">
            Welcome to Pet shop
        </div>
        <div class="text-xl text-gray-600">
            Take a look at our pet category
        </div>

        <div class="flex flex-wrap mt-5 justify-center">
            @foreach($categories as $category)
                <div class="flex flex-col rounded-lg shadow-md duration-150 overflow-hidden hover:shadow-xl m-2">
                    <a href="{{ route('category.show', ['category' => $category]) }}" class="flex flex-col ">
                        <div class="h-60 w-60">
                            <img class="h-60 w-full object-cover" src="{{ Storage::url('category/' . $category->image)}}" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col">
                            <div class="flex-1 flex flex-col space-y-2">
                                <p class="text-xl font-semibold text-gray-900 text-center">
                                    {{$category->name}}
                                </p>

                                @can('manage-data')
                                    <button class="bg-blue-500 text-white px-4 py-2 w-full rounded" type="submit"><a
                                            href="{{ route('category.edit', ['category' => $category]) }}">Update Category</a></button>
                                                                <form method="post" action="{{ route('category.destroy', ['category' => $category]) }}" class="w-full">
                                                                    @method('delete')
                                                                    @csrf
                                    <button class="bg-red-500 text-white px-4 py-2 w-full rounded" type="submit">Delete Category</button>
                                                                </form>
                                @endcan

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


        <div class="d-flex justify-content-center">
            <div>
                {{$categories->links()}}
            </div>
        </div>

    </div>

@endsection

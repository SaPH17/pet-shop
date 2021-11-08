@extends('layouts.app')

@section('content')

    <div class="px-48 py-12">
        <div class="pb-3 text-3xl font-bold">
            Welcome to Pet shop
        </div>
        <div class="text-xl text-gray-600">
            Take a look at our pet category
        </div>

        <div class="grid gap-4 grid-cols-3 mt-5">
            @foreach($pet_categories as $pet_category)
                <a href="/category/{{$pet_category->id}}" class="flex flex-col rounded-lg shadow-md duration-150 overflow-hidden hover:shadow-xl">
                    <div class="flex-shrink-0">
                        <img class="h-60 w-full object-cover" src="/asset/{{$pet_category->image}}" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-xl font-semibold text-gray-900 text-center">
                                {{$pet_category->name}}
                            </p>
                            @if(auth()->check() && auth()->user()->email == 'admin@admin.com')
                                <a href="/category/{{$pet_category->id}}/edit" class="bg-blue-500 text-white p-4">Update Category</a>
                                <form method="post" action="/category/{{$pet_category->id}}/delete">
                                    @method('delete')
                                    @csrf
                                    <button class="bg-red-500 text-white p-4">Delete Category</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            <div>
                {{$pet_categories->links()}}
            </div>
        </div>

    </div>

@endsection

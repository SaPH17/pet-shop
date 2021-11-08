@extends('layouts.app')

@section('content')

<div class="px-48">
    @if(sizeof($pets) > 0)
        <form class="flex flex-row" action="/category/{{$pets[0]->category_id}}" method="GET">
            <div class="flex flex-grow pr-5">
                <label for="search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    </div>
                    <input id="search" name="name" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" type="search">
                </div>
            </div>
            <div class="flex">
                <input class="bg-blue-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-blue-700 duration-200" type="submit" value="Search">
            </div>
        </form>

        <div class="grid gap-10 grid-cols-3 mt-10">
            @foreach($pets as $pet)
                <a href="/pet/{{$pet->id}}" class="flex flex-col rounded-lg shadow-md duration-150 overflow-hidden hover:shadow-xl">
                    <div class="flex-shrink-0">
                        <img class="h-60 w-full object-cover" src="/asset/{{$pet->image}}" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-xl font-semibold text-gray-900 text-center">
                                {{$pet->name}}
                            </p>
                            @if(auth()->check() && auth()->user()->email == 'admin@admin.com')
                                <a href="/pet/{{$pet->id}}/edit" class="btn btn-primary mr-4">Update Pet</a>
                                <form method="post" action="/pet/{{$pet->id}}/delete">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">Delete Pet</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8">
            <div>
                {{$pets->links()}}
            </div>
        </div>
    @else
        <div class="container h2 text-center mt-3">
            Pet is not found!
        </div>
    @endif

</div>

@endsection
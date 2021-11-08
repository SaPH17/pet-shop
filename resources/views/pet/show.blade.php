@extends('layouts.app')

@section('content')
    <div class="px-48">
        <div class="flex flex-col p-8 shadow-md bg-white rounded-md">
            <div class="flex flex-row">
                <div>
                    <img class="h-72 object-cover rounded-lg" src="/asset/{{$pet->image}}" alt="">
                </div>
                <div class="mx-5 w-100 flex flex-col">
                    <p class="text-3xl font-bold">
                        {{$pet->name}}
                    </p>
                    <p class="mt-3 text-gray-500">
                        Rp. {{$pet->price}}
                    </p>
                    <p class="mt-5 text-black text-md">
                        {{$pet->description}}
                    </p>                

                    @if(auth()->check() && auth()->user()->email != 'admin@admin.com')
                        <form action="/pet/{{$pet->id}}" method="post" class="mt-auto">
                            @csrf
                            <input type="hidden" value="{{$pet->id}}" name="pet_id">
                            <div class="mb-3 flex items-center">
                                <label for="quantity" class="block text-md font-medium text-gray-700 mr-4">Quantity: </label>
                                <input type="number" name="quantity" id="quantity" class="shadow-sm p-2 outline-none block w-full sm:text-sm hover:border-gray-500 duration-200 border-gray-300 border rounded-md" placeholder="Quantity">
                            </div>

                            <button type="submit" class="p-3 hover:bg-blue-700 duration-200 bg-blue-500 text-white rounded-md">Add to Cart</button>
                        </form>
                    @endif
                </div>
            </div>
            <div class="mt-8">
                <div class="text-2xl font-bold mb-4">
                    Tips & Tricks
                </div>
                <div class="" >
                    dummy
                </div>
            </div>
            <div class="mt-8">
                <div class="text-2xl font-bold mb-4">
                    Reviews
                </div>
                <div class="" >
                    dummy
                </div>
            </div>
        </div>
    </div>
@endsection

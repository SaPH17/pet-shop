@extends('layouts.app')
@section('style-script')
<script>
    $(function () {
        $('#toggle-update').on('click', function(){
            $('#real-text').addClass('hidden')
            $('#update-form').removeClass('hidden')
            $(this).addClass('hidden')
        })
    });
</script>
@endsection
@section('content')
    <div class="px-48">
        <div class="flex flex-col p-8 shadow-md bg-white rounded-md">
            <div class="flex flex-row">
                <div>
                    <img class="h-72 object-cover rounded-lg" src="{{ Storage::url('public/pet/' . $pet->image) }}" alt="">
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

                    @cannot('manage-data')
                        <form action="{{ route('cart.store') }}" method="post" class="mt-auto">
                            @csrf
                            <input type="hidden" value="{{$pet->id}}" name="pet_id">
                            <div class="mb-3 flex items-center">
                                <label for="quantity" class="block text-md font-medium text-gray-700 mr-4">Quantity: </label>
                                <input type="number" name="quantity" id="quantity" class="shadow-sm p-2 outline-none block w-full sm:text-sm hover:border-gray-500 duration-200 border-gray-300 border rounded-md" placeholder="Quantity">
                            </div>

                            <button type="submit" class="p-3 hover:bg-blue-700 duration-200 bg-blue-500 text-white rounded-md">Add to Cart</button>
                        </form>
                    @endcan
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
            {{-- Forum --}}
            <div class="flex flex-col space-y-4">
                <div>Forum</div>
                <div class="flex flex-col space-y-4">
                    @foreach ($pet->forums as $forum)
                        <div class="flex flex-col space-y-1">
                            <div>{{ $forum->user->username }} @if($forum->user->email === 'admin@admin.com') [Admin] @endif</div>
                            <div id="real-text">{{ $forum->text }}</div>
                            @can('edit-self-data', $forum)
                                <div class="flex flex-row space-x-2">
                                    <button id="toggle-update" type="button" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                                    <form action="{{ route('forum.update', compact('forum')) }}" method="post" id="update-form" class="hidden">
                                        @method('patch')
                                        @csrf
                                        <input type="text" name="text" value="{{ $forum->text }}">
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                                    </form>
                                    <form action="{{ route('forum.destroy', compact('forum')) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    @endforeach
                </div>
                <form action="{{ route('forum.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                    <input type="text" name="text" id="text" class="form-input">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

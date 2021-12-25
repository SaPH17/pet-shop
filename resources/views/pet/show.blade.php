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
{{--            <div class="mt-8">--}}
{{--                <div class="text-2xl font-bold mb-4">--}}
{{--                    Tips & Tricks--}}
{{--                </div>--}}
{{--                <div class="" >--}}
{{--                    dummy--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mt-8">--}}
{{--                <div class="text-2xl font-bold mb-4">--}}
{{--                    Reviews--}}
{{--                </div>--}}
{{--                <div class="" >--}}
{{--                    dummy--}}
{{--                </div>--}}
{{--            </div>--}}
            {{-- Forum --}}
            <div class="flex flex-col space-y-4 mt-8">
                <h2><b>Forum</b></h2>
                <div class="flex flex-col space-y-4">
                    <div class="flow-root">
                        <ul class="-mb-8">
                            @foreach ($pet->forums as $forum)
                                <li>
                                    <div class="relative pb-8">
                                        <div class="relative flex items-start space-x-3">
                                            <div class="relative">
                                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-gray-500">
                                                      <span class="text-sm font-medium leading-none text-white">{{$forum->user->username[0]}}</span>
                                                    </span>

                                                <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                    </span>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div>
                                                    <div class="text-sm">
                                                        <div class="font-medium text-gray-900">{{ $forum->user->username }} @if($forum->user->email === 'admin@admin.com') [Admin] @endif</div>
                                                    </div>
                                                    <p class="mt-0.5 text-sm text-gray-500">
                                                        {{$forum->created_at}}
                                                    </p>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-700" id="real-text">
                                                    <p>
                                                        {{ $forum->text }}
                                                    </p>
                                                </div>
                                                @can('edit-self-data', $forum)
                                                    <div class="flex flex-row space-x-2">
                                                        <svg id="toggle-update" xmlns="http://www.w3.org/2000/svg" class="my-2 h-6 w-6" viewBox="0 0 20 20" fill="#0D6EFD">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
{{--                                                        <button  type="button" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>--}}
                                                        <form action="{{ route('forum.update', compact('forum')) }}" method="post" id="update-form" class="hidden flex items-center">
                                                            @method('patch')
                                                            @csrf
                                                            <input type="text" class="" name="text" value="{{ $forum->text }}">
                                                            <button type="submit"> <svg id="toggle-update" xmlns="http://www.w3.org/2000/svg" class="ml-2 h-6 w-6" viewBox="0 0 20 20" fill="#0D6EFD">
                                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('forum.destroy', compact('forum')) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" >
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="my-2 h-6 w-6" viewBox="0 0 20 20" fill="#DC3545">
                                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            @endforeach

                        </ul>
                    </div>
                </div>
                <form action="{{ route('forum.store') }}" class="flex w-full" method="post">
                    @csrf
                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                    <input type="text" name="text" id="text" placeholder="Comment Here.." class="form-input">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection

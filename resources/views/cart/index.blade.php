@extends('layouts.app')

@section('content')
    <div class="flex items-center flex-col justify-center">
        @foreach($carts as $cart)
            <li class="media mb-6 p-10  rounded-lg list-none flex items-center bg-white shadow-lg">
                <div class="h-20 w-20">
                    <img src="{{$PUBLIC_FOLDER_URL}}/{{$cart->pet->image}}" class=" h-20 object-cover rounded-xl" alt="" >
                </div>

                <div class="media-body ml-3">
                    <h4 class="mt-0 mb-1 font-weight-bold">{{$cart->pet->name}}</h4>
                    <p class="h5">
                        <b>Rp. {{ $cart->pet->price}}</b>
                    </p>

                    <form method="post" class="mt-2 flex items-center" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="pet_id" value="{{ $cart->pet_id }}">
                        <div class="form-group row flex items-center">
                            <label class="col-md-4 mr-2 col-form-label" for="quantity">Quantity : </label>
                            <div class="col-md-6 ">
                                <input id="quantity" type="number" class="form-input" name="quantity" value="{{ $cart->quantity }}">
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-500 ml-2 text-white px-4 py-3 rounded">Update Quantity</button>
                    </form>
                </div>
            </li>
        @endforeach
        @if($carts->isNotEmpty())
            <div class="d-flex justify-content-center">
                <form method="post" action="{{ route('transaction.store') }}">
                    @csrf
                    <button class="bg-blue-500 text-white px-4 py-3 rounded">Checkout</button>
                </form>
            </div>
        @else
            <div class="container h3 text-center mt-5">
                No items!
            </div>
        @endif
    </div>
@endsection

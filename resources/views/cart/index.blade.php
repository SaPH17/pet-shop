@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($carts as $cart)
            <li class="media my-5 py-5 px-4 border rounded">
                <img src="{{ Storage::url('public/pet/' . $cart->pet->image) }}" class="mr-5 mt-4 h-72 rounded-xl" alt="" height="200rem">
                <div class="media-body ml-3">
                    <h4 class="mt-0 mb-1 font-weight-bold">{{$cart->pet->name}}</h4>
                    <p class="h5">
                        Rp. {{ $cart->pet->price}}
                    </p>

                    <form method="post" action="{{ route('cart.create') }}">
                        @method('patch')
                        @csrf
                        <input type="hidden" name="pet_id" value="{{ $cart->pet_id }}">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label" for="quantity">Quantity : </label>
                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-input" name="quantity" value="{{ $cart->quantity }}">
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Quantity</button>
                    </form>
                </div>
            </li>
        @endforeach
        @if($carts->isNotEmpty())
            <div class="d-flex justify-content-center">
                <form method="post" action="{{ route('transaction.store') }}">
                    @csrf
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Checkout</button>
                </form>
            </div>
        @else 
            <div class="container h3 text-center mt-5">
                No items!
            </div>
        @endif
    </div>
@endsection

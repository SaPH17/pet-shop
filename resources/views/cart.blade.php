@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($carts as $cart)

            <li class="media my-5 py-5 px-4 border rounded">
                <img src="/asset/{{\App\Pet::find($cart->pet_id)->image}}" class="mr-5 mt-4" alt="" height="200rem">
                <div class="media-body ml-3">
                    <h4 class="mt-0 mb-1 font-weight-bold">{{\App\Pet::find($cart->pet_id)->name}}</h4>

                    <p class="h5">
                        Rp. {{\App\Pet::find($cart->pet_id)->price}}
                    </p>

                    <p class="h5">
                        Quantity : {{$cart->quantity}}
                    </p>

                    <form method="post" action="/cart/{{$cart->id}}/edit">
                        @method('patch')
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label" for="quantity">Quantity : </label>
                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-input" name="quantity">
                            </div>
                        </div>
                        <button class="btn btn-primary d-inline-flex">Update Quantity</button>
                    </form>

                    <form method="post" action="/cart/{{$cart->id}}/delete">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger d-inline-flex mt-3">Delete From Cart</button>
                    </form>
                </div>
            </li>
        @endforeach
        @if($carts->isNotEmpty())
            <div class="d-flex justify-content-center">
                <form method="post" action="/cart/checkout">
                    @csrf
                    <button class="btn btn-dark mt-3">Checkout</button>
                </form>
            </div>
        @endif

        @if(!$carts->isNotEmpty())
            <div class="container h3 text-center mt-5">
                No items!
            </div>
            @endif
    </div>
@endsection

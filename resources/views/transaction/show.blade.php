@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($transaction->detail_transaction as $detail)

            <li class="media my-5 py-5 px-4 border rounded">
                <img src="{{ Storage::url('public/pet/' . $detail->pet->image) }}" class="mr-5 mt-4 h-72" alt="">
                <div class="media-body ml-3">
                    <h4 class="mt-0 mb-1 font-weight-bold">{{ $detail->pet->name }}</h4>

                    <p class="h5">
                        Rp. {{ $detail->pet->price }}
                    </p>

                    <p class="h5">
                        Quantity : {{$detail->quantity}}
                    </p>

                    <p class="h5">
                        Total Price : Rp. {{$detail->quantity * $detail->pet->price}}
                    </p>
                </div>
            </li>

        @endforeach

    </div>

@endsection

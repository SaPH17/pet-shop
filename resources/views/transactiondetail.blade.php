@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($transactions as $transaction)

            <li class="media my-5 py-5 px-4 border rounded">
                <img src="/asset/{{\App\Pet::find($transaction->pet_id)->image}}" class="mr-5 mt-4" alt=""height="200rem">
                <div class="media-body ml-3">
                    <h4 class="mt-0 mb-1 font-weight-bold">{{\App\Pet::find($transaction->pet_id)->name}}</h4>

                    <p class="h5">
                        Rp. {{\App\Pet::find($transaction->pet_id)->price}}
                    </p>

                    <p class="h5">
                        Quantity : {{$transaction->quantity}}
                    </p>

                    <p class="h5">
                        Total Price : Rp. {{$transaction->quantity * \App\Pet::find($transaction->pet_id)->price}}
                    </p>
                </div>
            </li>

        @endforeach

    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="flex items-center flex-col justify-center">
        @foreach($transaction->detail_transaction as $detail)

            <li class="media mb-6 p-10  rounded-lg list-none flex items-center bg-white shadow-lg w-1/2">
                <div class="h-20 w-20">
                    <img src="{{$PUBLIC_FOLDER_URL}}/{{$detail->pet->image}}" class=" h-20 object-cover rounded-xl" alt="" >
                </div>
                <div class="media-body ml-3">
                    <h4 class="mt-0 mb-1 font-weight-bold">{{ $detail->pet->name }}</h4>

                    <p class="h5">
                        Rp. {{ $detail->pet->price }}
                    </p>

                    <p class="h5">
                        Quantity : {{$detail->quantity}}
                    </p>

                    <p class="h5">
                        Total Price : <b>Rp. {{$detail->quantity * $detail->pet->price}}</b>
                    </p>
                </div>
            </li>

        @endforeach

    </div>

@endsection

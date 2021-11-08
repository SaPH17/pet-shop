@extends('layouts.app')

@section('content')
    <div class="container p-lg-3 mt-5">
        <div class="list-group list-group-flush">
            @foreach($transactions as $transaction)
                @if(auth()->user()->email == 'admin@admin.com')
                    <a href="/transaction/{{$transaction->id}}" class="list-group-item list-group-item-action p-4 bg-light text-dark h5">Transaction at {{$transaction->created_at}} <br> User ID : {{$transaction->user_id}} <br> Username : {{\App\User::find($transaction->user_id)->username}} </a>
                @else
                    <a href="/transaction/{{$transaction->id}}" class="list-group-item list-group-item-action p-4 bg-light text-dark h5">Transaction at {{$transaction->created_at}}</a>
                @endif
            @endforeach
        </div>
    </div>
@endsection

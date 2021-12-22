@extends('layouts.app')

@section('content')
    <div class="container p-lg-3 mt-5">
        <div class="list-group list-group-flush">
            @foreach($transactions as $transaction)
                @can('manage-data')
                    <a href="{{ route('transaction.show', compact('transaction')) }}" class="list-group-item list-group-item-action p-4 bg-light text-dark h5">Transaction at {{$transaction->created_at}} <br> User ID : {{$transaction->user_id}} <br> Username : {{ $transaction->user->username }} </a>
                @else
                    <a href="{{ route('transaction.show', compact('transaction')) }}" class="list-group-item list-group-item-action p-4 bg-light text-dark h5">Transaction at {{$transaction->created_at}}</a>
                @endcan
            @endforeach
        </div>
    </div>
@endsection

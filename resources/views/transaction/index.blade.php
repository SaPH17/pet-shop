@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center items-center">
            <div class="bg-white shadow overflow-hidden sm:rounded-md flex flex-col w-3/4">
                <ul class="divide-y divide-gray-200">
            @foreach($transactions as $transaction)
                @can('manage-data')
                    <a href="{{ route('transaction.show', compact('transaction')) }}" class="list-group-item list-group-item-action p-4 bg-light text-dark h5">Transaction at {{$transaction->created_at}} <br> User ID : {{$transaction->user_id}} <br> Username : {{ $transaction->user->username }} </a>
                @else
                    <li>
                        <a href="{{ route('transaction.show', compact('transaction')) }}" class="block hover:bg-gray-50 ">
                            <div class="px-4 py-4 flex items-center sm:px-6">
                                <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div class="truncate">
                                        <div class="flex text-sm">
                                            <p class="font-medium text-indigo-600 truncate">Transaction</p>
                                        </div>
                                        <div class="mt-2 flex">
                                            <div class="flex items-center text-sm text-gray-500">
                                                <!-- Heroicon name: solid/calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <p>
                                                    On
                                                    <p>&nbsp;{{$transaction->created_at}}</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                @endcan
            @endforeach

                </ul>
            </div>
    </div>



@endsection

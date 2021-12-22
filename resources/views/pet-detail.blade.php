@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-flex w-100">

                    <div>
                        <img src="/asset/{{$pet->image}}" height="250rem">
                    </div>

                    <div class="mx-5 w-100">
                        <p class="card-title h1 mx-2 font-weight-bold">
                            {{$pet->name}}
                        </p>
                        <p class="card-text h5">
                            {{$pet->description}}
                        </p>
                        <br>
                        <p class="card-text h5">
                            Rp. {{$pet->price}}
                        </p>

                        @if(auth()->check() && auth()->user()->email != 'admin@admin.com')
                            <form action="/pet/{{$pet->id}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$pet->id}}" name="pet_id">
                                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                <div class="form-group row mt-5">
                                    <label class="col-md-4 col-form-label" for="quantity">Quantity : </label>
                                    <div class="col-md-6">
                                        <input id="quantity" type="number" class="form-input" name="quantity">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary ml-5">Add to Cart</button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container">



    @if(sizeof($pets) > 0)
        <div class="ml-5">
            <p class="d-inline-flex h-25">Search Pet :</p>
            <form class="d-inline-flex col-md-8" action="/category/{{$pets[0]->category_id}}" method="GET">
                <input class="form-control mr-3" type="text" name="pet-search">
                <input class="btn btn-primary" type="submit" value="Search">
            </form>
        </div>

        <div class="container d-flex flex-row justify-content-xl-center flex-wrap mt-5">
            @foreach($pets as $pet)
                <a href="/pet/{{$pet->id}}" style="text-decoration: none;">
                    <div class="card m-4" style="width: 24rem;">
                        <div class="p-3">
                            <img src="/asset/{{$pet->image}}" class="card-img-top rounded" alt="..." width="18rem">
                        </div>
                        <div class="card-body bg-dark align-items-center">
                            <div class="card-title text-center h5 text-white">{{$pet->name}}</div>
                            <div class="d-flex justify-content-center">
                                @if(auth()->check() && auth()->user()->email == 'admin@admin.com')
                                    <a href="/pet/{{$pet->id}}/edit" class="btn btn-primary mr-4">Update Pet</a>
                                    <form method="post" action="/pet/{{$pet->id}}/delete">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete Pet</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            <div>
                {{$pets->links()}}
            </div>
        </div>
    @else
        <div class="container h2 text-center mt-3">
            Pet is not found!
        </div>
    @endif

</div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="title h2 border-bottom pb-3">
            Welcome to PHet shop
            <br>
            Take a look at our pet category
        </div>

        <div class="container d-flex flex-row justify-content-center flex-lg-wrap mt-5">
            @foreach($pet_categories as $pet_category)
                <a href="category/{{$pet_category->id}}" style="text-decoration: none;">
                    <div class="card m-4" style="width: 24rem;">
                        <img src="/asset/{{$pet_category->image}}" class="card-img-top rounded" alt="..." width="18rem">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold h4 text-dark">{{$pet_category->name}}</h5>
                            <div class="d-flex justify-content-center">
                                @if(auth()->check() && auth()->user()->email == 'admin@admin.com')
                                    <a href="/category/{{$pet_category->id}}/edit" class="btn btn-primary mr-4">Update Category</a>
                                    <form method="post" action="/category/{{$pet_category->id}}/delete">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete Category</button>
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
                {{$pet_categories->links()}}
            </div>
        </div>

    </div>

@endsection

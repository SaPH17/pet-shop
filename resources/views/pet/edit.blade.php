@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-flex w-100">

                    <div class="mx-5 w-100">
                        <p class="card-title h2 mt-4 mb-5 font-weight-bold">
                            Edit Pet
                        </p>
                        <form action="{{ route('pet.update', ['pet', $pet]) }}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="name">Pet Name : </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="category">Pet Category : </label>
                                <div class="col-md-6">
                                    <select class="custom-select" id="category" name="category">
                                        <option selected>Select a category</option>
                                        <option value="1">Dog</option>
                                        <option value="2">Cat</option>
                                        <option value="3">Bird</option>
                                        <option value="4">Small Pet</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="price">Pet Price : </label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="description">Pet Description : </label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="image">Pet Image : </label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary ml-3 col-form-label">Edit Pet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

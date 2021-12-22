@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-flex w-100">

                    <div class="mx-5 w-100">
                        <p class="card-title h2 mt-4 mb-5 font-weight-bold">
                            Add New Pet
                        </p>
                        <form action="{{ route('pet.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="name">Pet Name : </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="category">Pet Category : </label>
                                <div class="col-md-6">
                                    <select class="form-select" id="category" name="pet_category_id">
                                        <<option selected>Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="price">Pet Price : </label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-input @error('price') is-invalid @enderror" name="price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="description">Pet Description : </label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-input @error('description') is-invalid @enderror" name="description">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="image">Pet Image : </label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-input @error('image') is-invalid @enderror" name="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Pet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

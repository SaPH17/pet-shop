@extends('layouts.app')

@section('content')
    <div class=" pt-5 flex flex-col items-center">
        <div class="card bg-white rounded-xl p-10 shadow-lg">
            <div class="card-body">
                <div class="d-inline-flex w-100">

                    <div class="mx-5 w-100">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Edit Pet
                        </h3>
                        <p class="mt-1 mb-6 text-sm text-gray-500">
                            Update existing pet information accordingly.
                        </p>
                        <form action="{{ route('pet.update', compact('pet')) }}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-md-4 col-form-label" for="name">Pet Name : </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="my-4 w-full form-input @error('name') border-red-500 @enderror" 
                                        name="name" value="{{old('name', $pet->name)}}">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-form-label" for="category">Pet Category : </label>
                                <div class="col-md-6">
                                    <select class="my-4 w-full form-select" id="category" name="pet_category_id">
                                        <option selected>Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{(old('pet_category_id', $pet->pet_category->id) == $category->id)?'selected':''}}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-form-label" for="price">Pet Price : </label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="my-4 w-full form-input @error('price') border-red-500 @enderror" 
                                        name="price" value="{{old('price', $pet->price)}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-form-label" for="description">Pet Description : </label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="my-4 w-full form-input @error('description') border-red-500 @enderror" 
                                        name="description" value="{{old('description', $pet->description)}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-form-label" for="image">Pet Image : </label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="my-4 w-full form-input @error('image') border-red-500 @enderror" \
                                        name="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 w-full rounded">Edit Pet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

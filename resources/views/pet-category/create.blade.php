@extends('layouts.app')

@section('content')
    <div class=" pt-5 flex flex-col items-center">
        <div class="card bg-white rounded-xl p-10 shadow-lg">
            <div class="card-body">
                <div class="d-inline-flex w-100">

                    <div class="mx-5 w-100">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Add New Pet Category
                        </h3>
                        <p class="mt-1 mb-6 text-sm text-gray-500">
                            Input new pet category information accordingly.
                        </p>
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-form-label" for="name">Category Name : </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="my-4 w-full form-input @error('name') is-invalid @enderror" name="name">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="block text-sm font-medium text-gray-700 col-form-label" for="image">Category Image : </label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="my-4 w-full form-input @error('image') is-invalid @enderror" name="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 w-full mt-2 rounded">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

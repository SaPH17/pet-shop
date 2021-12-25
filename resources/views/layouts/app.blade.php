<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    @yield('style-script')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-white shadow-md py-6 fixed w-full z-20">
            <div class="container mx-auto flex justify-between items-center px-6 space-x-6">
                <div class="flex">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-blue-500 no-underline">
                        <div class="flex-shrink-0 flex items-center">
                            <svg class="h-6 mr-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paw" class="svg-inline--fa fa-paw fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 224c-79.41 0-192 122.76-192 200.25 0 34.9 26.81 55.75 71.74 55.75 48.84 0 81.09-25.08 120.26-25.08 39.51 0 71.85 25.08 120.26 25.08 44.93 0 71.74-20.85 71.74-55.75C448 346.76 335.41 224 256 224zm-147.28-12.61c-10.4-34.65-42.44-57.09-71.56-50.13-29.12 6.96-44.29 40.69-33.89 75.34 10.4 34.65 42.44 57.09 71.56 50.13 29.12-6.96 44.29-40.69 33.89-75.34zm84.72-20.78c30.94-8.14 46.42-49.94 34.58-93.36s-46.52-72.01-77.46-63.87-46.42 49.94-34.58 93.36c11.84 43.42 46.53 72.02 77.46 63.87zm281.39-29.34c-29.12-6.96-61.15 15.48-71.56 50.13-10.4 34.65 4.77 68.38 33.89 75.34 29.12 6.96 61.15-15.48 71.56-50.13 10.4-34.65-4.77-68.38-33.89-75.34zm-156.27 29.34c30.94 8.14 65.62-20.45 77.46-63.87 11.84-43.42-3.64-85.21-34.58-93.36s-65.62 20.45-77.46 63.87c-11.84 43.42 3.64 85.22 34.58 93.36z"></path></svg>
                            <span class="text-2xl">PetShop</span>
                        </div>                    
                    </a>
                </div>
                <nav class="space-x-4 text-blue-500 text-sm sm:text-base flex flex-1">
                    @guest
                        <a class="no-underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <div class="flex items-center flex justify-between flex-1">
                            <div class="flex flex-row items-center space-x-2">
                                @can('manage-data')
                                    <a href="{{ route('pet.create') }}" class="p-2">Add Pet</a>
                                    <a href="{{ route('category.create') }}" class="p-2">Add Category</a>
                                @else
                                    <a href="{{ route('cart.index') }}" class="p-2">Cart</a>
                                    <a href="{{ route('transaction.index') }}" class="p-2">Transaction</a>
                                @endcan
                            </div>
                            <div class="flex flex-row items-center">
                                <a href="{{ route('logout') }}"
                                class="no-underline mr-5"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                                <div class="flex">
                                    <img class="w-8 h-8 rounded-full" src="https://robohash.org/{{Auth::user()->username}}" alt="">
                                </div>
                            </div>
                        </div>
                    @endguest
                </nav>
            </div>
        </header>
        <div class="pt-28 pb-12">
            @yield('content')
        </div>
    </div>
</body>
</html>

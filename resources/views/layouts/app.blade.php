<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav style="height:70.1px;" class="navbar navbar-expand-lg navbar-light bg-dark text-white">
            <h1 class="navbar-brand text-white text-xl font-weight-bolder" style="font-size : 30px;" href="#">AdXpress</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    @auth
                    <li class="nav-item active text-secondary">
                        <a class="nav-link text-white" href="#">{{ auth()->user()->first_name }} <span class="sr-only">(current)</span></a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item active text-secondary">
                        <a style="font-size : 18px;" class="nav-link text-white" href="/login">Login<span class="sr-only">(current)</span></a>
                    </li>  
                    <li class="nav-item active text-secondary">
                        <a style="font-size : 18px;" class="nav-link text-white ml-4 text-xl" href="/login">Register<span class="sr-only">(current)</span></a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
        @if($errors->any())
        <div style="background-color:#f74141; padding: 5px;">  
            <p class="text-white mt-2">
             These credentials do not match our records.
         </p>
     </div>
     @endif
     <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

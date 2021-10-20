<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Boolpress</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <ul class="navbar-nav ml-auto>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/admin') }}">Admin</a></li>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
            
        </div>
        <div id="root"></div>
        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>

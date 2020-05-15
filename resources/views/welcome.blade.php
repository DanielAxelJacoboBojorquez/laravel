<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Programming</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <a class="navbar-brand mr-auto" href="/">PROGRAMMING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Programming Languages</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a class="nav-link text-decoration-none" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="nav-link text-decoration-none" href="{{ route('login') }}">Login</a>
                            @endauth
                        </div>
                    @endif 
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div>
            <img src="{{asset('img/header.jpg')}}"  class="img-fluid" width="100%" alt="">    
        </div>
    </header>
    <div class="container">
        <h1 class="text-center">Programming Languages</h1> 
    </div>  
    </body>
</html>

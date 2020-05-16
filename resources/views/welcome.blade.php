<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Programming</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
        <br>
        <div class="row">
            @foreach ($languages as $language)
                <div class="class="col-xs-12 col-sm-6 col-md-4 text-center mt-5">
                    <h2>{{$language->title}}</h2>
                    <img src="{{asset('images/'.$language->image)}}" class="img-fluid img-rounded" width="120px" alt="{{$language->title}}"><img src="" alt="">
                    <p class="text-justify">{{$language->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

@extends('layout.layout-user')

@section("contents")
<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        @foreach ($movies as $key => $movie)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : '' }}"
        aria-current="{{$key == 0 ? 'true' : '' }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($movies as $key => $movie)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img src="{{$movie->background}}" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>{{$movie->title}}</h1>
                <h5>{{$movie->release_date}} | {{$movie->genre}}</h5>
                <p>{{$movie->description}}</p>
            </div>
        </div>
        @endforeach


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Popular -->
    <div class="d-flex py-2 px-3 bg-dark">
        <img class="me-2 pt-2 popular-img" src="storage/images/assets/flame.png" alt="">
        <h2 class="text-white">Popular</h2>
    </div>
    <div class="d-flex justify-content-center">

        @foreach ($movies as $movie)
        <div class="mx-3">
            <img class="cover-img" src="{{$movie->image_thumbnail}}" alt="">
            <form action="/detail-movie/{{$movie->id}}" method="post">
                @csrf
                @foreach ($users as $user)
                <input type="hidden" name="email" value="{{$user->email}}">
                @endforeach
                <button type="submit" class="navbar-text">
                    <h5>{{$movie->title}}</h5>
                </button>
            </form>
            <p class="text-secondary cover-text">{{$movie->release_date}}</p>
        </div>
        @endforeach
    </div>

    <!-- Show -->
    <div class="d-flex py-2 px-3 bg-dark">
        <div class="p-2 d-flex">
            <img class="me-2 pt-2 show-img" src="storage/images/assets/film.png" alt="">
            <h2 class="text-white">Show</h2>
        </div>
        <div class="d-flex">
            @foreach ($users as $user)
            <form action="/user" method="post">
                @csrf
                <input type="hidden" name="email" value="{{$user->email}}">
                <input type="text" name="searchMovie" class="form-control bg-secondary text-white"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                <button type="submit">Search</button>
            </form>
            @endforeach

        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        @foreach ($genres as $genre)
        <a href="#"><button class="bg-dark show-btn">{{$genre->genre}}</button></a>
        @endforeach

    </div>
    <div class="d-flex mt-3">
        <p class="mx-3 pt-2 text-white">Sort by</p>
        <a href="#"><button class="bg-dark show-btn">Latest</button></a>
        <a href="#"><button class="bg-dark show-btn">A - Z</button></a>
        <a href="#"><button class="bg-dark show-btn">Z - A</button></a>
    </div>
    <div class="d-flex justify-content-center">
        @foreach ($movies as $movie)
        <div class="mx-3">
            <img class="cover-img" src="{{$movie->image_thumbnail}}" alt="">
            <form action="/detail-movie/{{$movie->id}}" method="post">
                @csrf
                @foreach ($users as $user)
                <input type="hidden" name="email" value="{{$user->email}}">
                @endforeach
                <button type="submit" class="navbar-text">
                    <h5>{{$movie->title}}</h5>
                </button>
            </form>

            {{-- <a class="cover-text">
                <h5 class="text-white cover-text">{{$movie->title}}</h5>
            </a> --}}
            <p class="text-secondary cover-text">{{$movie->release_date}}</p>
        </div>
        @endforeach
    </div>

    @endsection

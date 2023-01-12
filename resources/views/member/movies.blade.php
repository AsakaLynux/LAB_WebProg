@extends('layout.layout-user')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-danger fs-5">Movies</h2>
</div>
<div class="text-white rounded p-5">
    <label for="" class="form-label">Search Movie</label>
    <div class="d-flex">
        <div class="my-auto">
            <form action="/actors" method="get">
                <input type="text" name="searchActor" class="form-control bg-dark text-white my-auto" id="" aria-describedby="">
                <input type="submit" value="Search">
            </form>

        </div >
    </div>
    <div class="d-flex justify-content-center">
        @foreach ($movies as $movie)
        <div class="mx-3">
            <img class="cover-img" src="{{$movie->image_thumbnail}}" alt="">
            <form action="/detail-movie/{{$movie->id}}" method="post">
                @csrf
                <input type="hidden" name="movie_id" value="{{$movie->id}}">
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
</div>
@endsection

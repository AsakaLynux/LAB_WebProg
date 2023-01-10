@extends('layout.layout-user')

@section('contents')
<div class="card m-5 text-white bg-dark mx-auto" style="max-width: 980px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img width="300px" src="../{{$movies->image_thumbnail}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{$movies->title}}</h3>
          <p class="card-text">{{$movies->genre}}</p>
          <p class="card-text">Release Date {{$movies->release_date}}</p>
          <h5 class="card-title">Storyline</h5>
          <p class="card-text">{{$movies->description}}</p>
          <h5 class="card-title">Director</h5>
          <p class="card-text">{{$movies->director}}</p>
          <form action="/" method="POST">
            @csrf
            {{-- <input type="hidden" name="user_id" value="{{$users->id}}"> --}}
            <input type="hidden" name="movie_id" value="{{$movies->id}}">
            <button class="btn btn-danger type="submit">Add Watchlist</button>
        </form>
        </div>
      </div>
    </div>
</div>
<div class="text-white mx-auto" style="max-width: 980px;">
    <h5 class="card-title">Cast</h5>
    <div class="d-flex">
        @foreach ($actors as $actor)
        <div class="card bg-dark mt-3 me-3" style="width: 200px;">
            <img src="../{{$actor->image_url}}" class="img-fluid rounded-start coverpict" alt="...">
            <div class="card-body">

                <form action="/detail-actor/{{$actor->id}}" method="post">
                    @csrf
                    @foreach ($users as $user)
                    <input type="hidden" name="email" value="{{$user->email}}">
                    @endforeach
                    <button type="submit" class="navbar-text">
                        <h5>{{$actor->name}}</h5>
                    </button>
                </form>
                <p class="card-text">Killmonger</p>
            </div>
        </div>
        @endforeach


    </div>
</div>
<div class="text-white mx-auto mt-4" style="max-width: 980px;">
    <h5 class="card-title">More</h5>
</div>
<div class="d-flex justify-content-center">
    @foreach ($gets as $getMovie)
    <div class="mx-3">
        <img class="cover-img" src="../{{$getMovie->image_thumbnail}}" alt="">
        <form action="/detail-movie/{{$getMovie->id}}" method="post">
            @csrf
            @foreach ($users as $user)
            <input type="hidden" name="email" value="{{$user->email}}">
            @endforeach
            <button type="submit" class="navbar-text">
                <h5>{{$getMovie->title}}</h5>
            </button>
        </form>
        <p class="text-secondary cover-text">{{$getMovie->release_date}}</p>
    </div>
    @endforeach
</div>
@endsection

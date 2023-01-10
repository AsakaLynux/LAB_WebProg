@extends('layout.layout-guest')

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
                <a href="/detail-actos/{{$actor->id}}" class="coverlink"><h5>{{$actor->name}}</h5></a>
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
        <a class="cover-text" href="/detail-movis/{{$getMovie->id}}"><h5 class="text-white cover-text">{{$getMovie->title}}</h5></a>
        <p class="text-secondary cover-text">{{$getMovie->release_date}}</p>
    </div>
    @endforeach
</div>
@endsection

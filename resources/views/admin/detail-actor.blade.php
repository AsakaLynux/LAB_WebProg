@extends('layout.layout-admin')

@section('contents')
<div>
    <div class="d-flex actordetails-content mx-auto bg-black my-5">
        <div class="text-light mx-3">
            <img class="actordetails rounded" src="../{{$actors->image_url}}" alt="">
            <div class="mt-4">
                <h2>Personal Info</h2>
                <h4>Popularity</h4>
                <p>{{$actors->popularity}}</p>
                <h4>Gender</h4>
                <p>{{$actors->gender}}</p>
                <h4>Birthday</h4>
                <p>{{$actors->dob}}</p>
                <h4>Place of birth</h4>
                <p>{{$actors->place_of_birth}}</p>
            </div>
        </div>
        <div class="text-light mx-3">
            <div class="d-flex justify-content-between">
                <h1>{{$actors->name}}</h1>
                <div>
                    <a class="btn btn-danger" href=""><img src="../storage/images/assets/pencil-icon.png" style="height: 15px; width: 15px;" alt=""></a>
                    <a class="btn btn-danger" href=""><img src="../storage/images/assets/trashcan-icon.png" style="height: 15px; width: 15px;" alt=""></a>
                </div>
            </div>
            <h3>Biography</h3>
            <p>{{$actors->biography}}</p>
            <h5>Known For</h5>
            <div class="card bg-dark" style="width: 150px; height: 300px">
                @foreach ($movies as $movie)

                @endforeach
                <img src="../{{$movie->image_thumbnail}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="cover-text" href="/detail-movies/{{$movie->id}}"><p class="text-white cover-text">{{$movie->title}}</p></a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

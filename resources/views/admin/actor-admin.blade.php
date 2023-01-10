@extends('layout.layout-admin')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-danger fs-5">Actors</h2>
</div>
<div class="text-white rounded p-5">
    <label for="" class="form-label">Search Actor</label>
    <form action="/actor" method="get">
        <div class="d-flex">
            <div class="my-auto">
                <input type="text" class="form-control bg-dark text-white my-auto" name="searchActor" id="" aria-describedby="">
                <button type="submit">Search</button>
            </div >
            <a href="/create-actor" class="btn btn-danger my-auto mx-3">Add Actor</a>
        </div>

    </form>

    <div class="text-white">
        <div class="d-flex mx-auto">
            @foreach ($actors as $actor)
            <div class="card bg-dark mt-3 me-3" style="width: 200px;">
                <img src="{{$actor->image_url}}" class="img-fluid rounded-start coverpict" alt="...">
                <div class="card-body">
                    <a href="/detail-actors/{{$actor->id}}" class="coverlink"><h5>{{$actor->name}}</h5></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

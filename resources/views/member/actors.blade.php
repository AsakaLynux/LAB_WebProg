@extends('layout.layout-user')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-danger fs-5">Actors</h2>
</div>
<div class="text-white rounded p-5">
    <label for="" class="form-label">Search Actor</label>
    <div class="d-flex">
        <div class="my-auto">
            @foreach ($users as $user)
            <form action="/actors" method="post">
                @csrf
                <input type="hidden" name="email" value="{{$user->email}}">
                <input type="text" name="searchActor" class="form-control bg-dark text-white my-auto" id="" aria-describedby="">
                <input type="submit" value="Search">
            </form>
            @endforeach

        </div >
    </div>
    <div class="text-white">
        <div class="d-flex mx-auto">
            @foreach ($actors as $actor)
            <div class="card bg-dark mt-3 me-3" style="width: 200px;">
                <img src="{{$actor->image_url}}" class="img-fluid rounded-start coverpict" alt="...">
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
</div>
@endsection

@extends('layout.layout-user')

@section('contents')
<div class="m-5">
    <div>
        <div class="d-flex">
            <h2 class="text-white me-2">My</h2>
            <h2 class="text-danger">Watchlist</h2>
        </div>
        <div>
            <div class="mb-3">
                <label for="" class="form-label text-white">Search</label>
                <input type="text" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3 filter-btn">
                <select class="form-select bg-dark text-secondary" aria-label="Default select example">
                    <option selected>All</option>
                    <option value="Planned">Planned</option>
                    <option value="Watching">Watching</option>
                    <option value="Finished">Finished</option>
                </select>
            </div>
        </div>
        <div class="d-flex text-secondary justify-content-between">
            <p>Poster</p>
            <p style="margin-left: 60px">Title</p>
            <p style="margin-left: 150px">Status</p>
            <p style="margin-right: 45px">Action</p>
        </div>
        @foreach ($movies as $movie)
        <div class="bg-dark rounded d-flex justify-content-between align-items-center">
            <img src="../{{$movie->image_thumbnail}}" width="100" alt="">
            <p class="text-white">{{$movie->title}}</p>
            <p class="status-text">Planning</p>
            <button button type="button" class="me-5 bg-dark action-btn" data-bs-toggle="modal" data-bs-target="#actionModal">...</button>
        </div>

        @endforeach
        @foreach ($watchlists as $watchlist)
        <div class="bg-dark rounded d-flex justify-content-between align-items-center">
            <p class="status-text">{{$watchlist->status}}</p>
            <button button type="button" class="me-5 bg-dark action-btn" data-bs-toggle="modal" data-bs-target="#actionModal">...</button>
        </div>


    </div>
</div>
<div class="modal fade" id="actionModal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-white">
        <div class="modal-content bg-dark">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($users as $user)
            <form action="/update-wathclist/{{$watchlist->id}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 filter-btn">
                        <input type="hidden" name="email" value="{{$user->email}}">
                        <select class="form-select bg-secondary text-white" name="status" aria-label="Default select example">
                            <option selected>All</option>
                            <option value="Planned">Planned</option>
                            <option value="Watching">Watching</option>
                            <option value="Finished">Finished</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Save changes</button>
                  </div>
            @endforeach

            </form>

          </div>
    </div>
</div>
@endforeach
@endsection

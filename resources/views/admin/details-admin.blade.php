@extends('layout.layout-admin')

@section('contents')
<div class="card m-5 text-white bg-dark mx-auto" style="max-width: 980px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img width="300px" src="assets/black-panther-cover.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">Black Panther: Wakanda Forever</h3>
          <p class="card-text">Action</p>
          <p class="card-text">Year 2022</p>
          <h5 class="card-title">Storyline</h5>
          <p class="card-text">The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T'Challa.</p>
          <h5 class="card-title">Ryan Coogler</h5>
          <p class="card-text">Director</p>
          <div>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="text-white mx-auto" style="max-width: 980px;">
    <h5 class="card-title">Cast</h5>
    <div class="d-flex">
        <div class="card bg-dark mt-3 me-3" style="width: 200px;">
            <img src="assets/michael-b-jordan.jpg" class="img-fluid rounded-start coverpict" alt="...">
            <div class="card-body">
                <a href="" class="coverlink"><h5>Michael B. Jordan</h5></a>
                <p class="card-text">Killmonger</p>
            </div>
        </div>
        <div class="card bg-dark mt-3" style="width: 200px;">
            <img src="assets/lupita-nyongo.jpg" class="img-fluid rounded-start coverpict" alt="...">
            <div class="card-body">
                <a href="" class="coverlink"><h5>Lupita Nyong'o</h5></a>
                <p class="card-text">Nakia</p>
            </div>
        </div>
    </div>
</div>
<div class="text-white mx-auto mt-4" style="max-width: 980px;">
    <h5 class="card-title">More</h5>
</div>
<div class="d-flex justify-content-center">
    <div class="mx-3">
        <img class="cover-img" src="assets/avatar-cover.png" alt="">
        <a class="cover-text" href=""><h5 class="text-white cover-text">Avatar: The Way of Water</h5></a>
        <p class="text-secondary cover-text">2022</p>
    </div>
    <div class="mx-3">
        <img class="cover-img" src="assets/glass-onion-cover.png" alt="">
        <a class="cover-text" href=""><h5 class="text-white cover-text">Glass Onion: A Knives Out Mystery</h5></a>
        <p class="text-secondary cover-text">2022</p>
    </div>
    <div class="mx-3">
        <img class="cover-img" src="assets/black-panther-cover.png" alt="">
        <a class="cover-text" href=""><h5 class="text-white cover-text">Black Panther: Wakanda Forever</h5></a>
        <p class="text-secondary cover-text">2022</p>
    </div>
</div>
@endsection

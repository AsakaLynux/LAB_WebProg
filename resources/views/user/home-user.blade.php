@extends('layout-user')

@section("contents")
<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/avatar.png" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Avatar: The Way of Water</h1>
          <h5>2022 | Action</h5>
          <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/glass-onion.png" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Glass Onion: A Knives Out Mystery</h1>
          <h5>2022 | Comedy</h5>
          <p>Famed Southern detective Benoit Blanc travels to Greece for his latest case.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/black-panther.png" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Black Panther: Wakanda Forever</h1>
          <h5>2022 | Action</h5>
          <p>The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T'Challa.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Popular -->
<div class="d-flex py-2 px-3 bg-dark">
    <img class="me-2 pt-2 popular-img" src="assets/flame.png" alt="">
    <h2 class="text-white">Popular</h2>
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

<!-- Show -->
<div class="d-flex py-2 px-3 bg-dark">
    <div class="p-2 d-flex">
        <img class="me-2 pt-2 show-img" src="assets/film.png" alt="">
        <h2 class="text-white">Show</h2>
    </div>
    <div class="d-flex">
        <label for="" class="form-label text-white me-2">Search</label>
        <input type="email" class="form-control bg-secondary text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    <a href=""><button class="bg-dark show-btn">Comedy</button></a>
    <a href=""><button class="bg-dark show-btn">Crime</button></a>
    <a href=""><button class="bg-dark show-btn">Action</button></a>
    <a href=""><button class="bg-dark show-btn">Horror</button></a>
    <a href=""><button class="bg-dark show-btn">Drama</button></a>
    <a href=""><button class="bg-dark show-btn">Fantasy</button></a>
    <a href=""><button class="bg-dark show-btn">Family</button></a>
</div>
<div class="d-flex mt-3">
    <p class="mx-3 pt-2 text-white">Sort by</p>
    <a href=""><button class="bg-dark show-btn">Latest</button></a>
    <a href=""><button class="bg-dark show-btn">A - Z</button></a>
    <a href=""><button class="bg-dark show-btn">Z - A</button></a>
</div>
<div class="d-flex justify-content-center">
    <div class="mx-3">
        <img class="cover-img" src="assets/black-panther-cover.png" alt="">
        <a class="cover-text" href=""><h5 class="text-white cover-text">Black Panther: Wakanda Forever</h5></a>
        <p class="text-secondary cover-text">2022</p>
    </div>
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
</div>
  @endsection

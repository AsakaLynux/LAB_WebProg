@extends('layout-user')

@section('contents')
<div>
    <div class="d-flex actordetails-content mx-auto bg-black my-5">
        <div class="text-light mx-3">
            <img class="actordetails rounded" src="assets/michael-b-jordan.jpg" alt="">
            <div class="mt-4">
                <h2>Personal Info</h2>
                <h4>Popularity</h4>
                <p>4.79</p>
                <h4>Gender</h4>
                <p>Male</p>
                <h4>Birthday</h4>
                <p>1999 - 01 - 06</p>
                <h4>Place of birth</h4>
                <p>USA</p>
            </div>
        </div>
        <div class="text-light mx-3">
            <h1>Michael B Jordan</h1>
            <h3>Biography</h3>
            <p>Michael Bakari Jordan is an American actor. He is known for his film roles as shooting victim Oscar Grant in the drama Fruitvale Station, boxer Donnie Creed in Creed, and Erik Killmonger in Black Panther, all of which were written and directed by Ryan Coogler. Jordan has reprised his role of Creed in Creed II.</p>
            <h5>Known For</h5>
            <div class="card bg-dark" style="width: 150px; height: 300px">
                <img src="assets/black-panther-cover.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="cover-text" href=""><p class="text-white cover-text">Black Panther: Wakanda Forever</p></a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

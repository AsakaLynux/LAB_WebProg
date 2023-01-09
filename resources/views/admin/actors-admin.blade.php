@extends('layout-admin')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-danger fs-5">Actors</h2>
</div>
<div class="text-white rounded p-5">
    <label for="" class="form-label">Search Actor Address</label>
    <div class="d-flex">
        <div class="my-auto">
            <input type="text" class="form-control bg-dark text-white my-auto" id="" aria-describedby="">
        </div >
        <a href="" class="btn btn-danger my-auto mx-3">Add Actor</a>
    </div>
    <div class="text-white">
        <div class="d-flex mx-auto">
            <div class="card bg-dark mt-3 me-3" style="width: 200px;">
                <img src="storage/images/assets/michael-b-jordan.jpg" class="img-fluid rounded-start coverpict" alt="...">
                <div class="card-body">
                    <a href="" class="coverlink"><h5>Michael B. Jordan</h5></a>
                    <p class="card-text">Killmonger</p>
                </div>
            </div>
            <div class="card bg-dark mt-3" style="width: 200px;">
                <img src="storage/images/assets/lupita-nyongo.jpg" class="img-fluid rounded-start coverpict" alt="...">
                <div class="card-body">
                    <a href="" class="coverlink"><h5>Lupita Nyong'o</h5></a>
                    <p class="card-text">Nakia</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layout.layout-admin')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-white fs-5">Update Actor</h2>
</div>
<!-- Form -->
<form class="text-white rounded p-5" action="/update-actor" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="id_update" value="{{$actor->id}}">
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Gender</label>
        <select class="form-select bg-dark text-secondary" name="gender" aria-label="Default select example">
            <option selected>-- Open this select menu --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Biography</label>
        <textarea class="form-control bg-dark text-white" name="biography" id="" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Date of birth</label>
        <input type="date" class="form-control bg-dark text-white" name="dob" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Place of birth</label>
        <input type="text" name="place_of_birth" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Image</label>
        <input class="form-control bg-dark text-white" name="image" type="file" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Popularity</label>
        <input type="text" class="form-control bg-dark text-white" name="popularity" id="" aria-describedby="">
    </div>
    <button type="submit" class="btn btn-danger mb-3">Update</button>
</form>
@endsection

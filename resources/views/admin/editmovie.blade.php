@extends('layout-admin')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-white fs-5">Add Movie</h2>
</div>
<!-- Form -->
<form class="text-white rounded p-5">
    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <textarea class="form-control bg-dark text-white" id="" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Genre</label>
        <select class="form-select bg-dark text-secondary" aria-label="Default select example">
            <option selected>Select an option</option>
            <option value="1">Comedy</option>
            <option value="2">Crime</option>
            <option value="3">Action</option>
            <option value="4">Horror</option>
            <option value="5">Drama</option>
            <option value="6">Fantasy</option>
            <option value="7">Family</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Actors</label>
        <label for="" class="form-label">Actor</label>
        <select class="form-select bg-dark text-secondary" aria-label="Default select example">
            <option selected>Select an option</option>
            <option value="1">Comedy</option>
            <option value="2">Crime</option>
            <option value="3">Action</option>
            <option value="4">Horror</option>
            <option value="5">Drama</option>
            <option value="6">Fantasy</option>
            <option value="7">Family</option>
        </select>
        <select class="form-select bg-dark text-secondary" aria-label="Default select example">
            <option selected>Select an option</option>
            <option value="1">Comedy</option>
            <option value="2">Crime</option>
            <option value="3">Action</option>
            <option value="4">Horror</option>
            <option value="5">Drama</option>
            <option value="6">Fantasy</option>
            <option value="7">Family</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Director</label>
        <input type="text" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Release Date</label>
        <input type="date" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Image url</label>
        <input class="form-control bg-dark text-white" type="file" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Background url</label>
        <input class="form-control bg-dark text-white" type="file" id="">
    </div>
    <button type="submit" class="btn btn-danger mb-3">Edit</button>
</form>
@endsection

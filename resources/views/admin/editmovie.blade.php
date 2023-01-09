@extends('layout.layout-admin')

@section('contents')
<!-- Title -->
<div class="d-flex mx-5 mt-5">
    <h2 class="text-white fs-5">Update Movie</h2>
</div>
<!-- Form -->
<form class="text-white rounded p-5" action="/update-movie" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_update" value="{{$movies->id}}">
    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <textarea class="form-control bg-dark text-white" id="" rows="3" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Genre: </label>
        @foreach ($genres as $genre)
        <input type="checkbox" name="genre[]" value={{$genre->genre}}>
        <label for="genre">{{$genre->genre}}</label>
        @endforeach
    </div>
    <div class="mb-3">
        <div class="records">
            <label for="actor">Actor: </label>
            <select name="actor[]">
                @foreach ($actors as $actor)
                    <option value="{{$actor->name}}">{{$actor->name}}</option>

                @endforeach
            </select>
            <label for="character-name">Character Name: </label>
            <input type="text" name="character_name[]">
            <a class="extra-fields" href="#">Add More Fields</a>
        </div>
        <div class="records_dynamic"></div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Director</label>
        <input type="text" name="director" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Release Date</label>
        <input type="date" name="release_date" class="form-control bg-dark text-white" id="" aria-describedby="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Image thumbnail</label>
        <input class="form-control bg-dark text-white" type="file" name="image_thumbnail">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Background</label>
        <input class="form-control bg-dark text-white" type="file" name="background" id="">
    </div>
    <button type="submit" class="btn btn-danger mb-3">Update</button>
</form>
@endsection

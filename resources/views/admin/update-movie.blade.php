<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Edit Page</h1>

    <h1>Edit Movie</h1>
    <form action="/update-movie" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="id">Input Movie ID</label>
        <input type="text" name="id_update">

        <label for="title">Title</label>
        <input type="text" name="title">

        <label for="description">Description</label>
        <input type="text" name="description">

        <label for="genre">Genre</label>
        <input type="text" name="genre">

        <label for="actor">Actor</label>
        <input type="text" name="actor">

        <label for="character-name">Character Name</label>
        <input type="text" name="character_name">

        <label for="director">Director</label>
        <input type="text" name="director">

        <label for="release-date">Release date</label>
        <input type="date" name="release_date">

        <label for="insertImage">Image Url </label>
        <input type="file" id="insertImage" name="image_thumbnail">

        <label for="insertImage">Background Url </label>
        <input type="file" id="insertImage" name="background">

        <input type="submit" value="Submit">
     </form>

     @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>

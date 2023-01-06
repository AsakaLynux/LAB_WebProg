<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Edit Movie</title>
</head>
<body>
    <h1>Edit Movie</h1>
    <form action="/update-movie" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="id_update" placeholder="{{$movies->id}}" value="{{$movies->id}}">

        <label for="title">Title</label>
        <input type="text" name="title" placeholder="{{$movies->title}}">

        <br><label for="description">Description: </label>
        <input type="text" name="description" placeholder="{{$movies->description}}">

        <br><label for="genre">Genre: </label>
        @foreach ($genres as $genre)
            <input type="checkbox" name="genre[]" value={{$genre->genre}}>
            <label for="genre">{{$genre->genre}}</label>
        @endforeach

        <div class="records">
            <label for="actor">Actor: </label>
            <input type="text" name="actor[]">
            <label for="character-name">Character Name: </label>
            <input type="text" name="character_name[]">
            <a class="extra-fields" href="#">Add More Fields</a>
        </div>
        <div class="records_dynamic"></div>

        <br><label for="director">Director: </label>
        <input type="text" name="director" placeholder="{{$movies->director}}">

        <br><label for="release-date">Release date: </label>
        <input type="date" name="release_date">

        <br><label for="insertImage">Image Url: </label>
        <input type="file" id="insertImage" name="image_thumbnail">

        <br><label for="insertImage">Background Url: </label>
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
<script>
    $('.extra-fields').click(function() {
    $('.records').clone().appendTo('.records_dynamic');
    $('.records_dynamic .records').addClass('single remove');
    $('.single .extra-fields').remove();
    $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
    $('.records_dynamic > .single').attr("class", "remove");

    $('.records_dynamic input').each(function() {
        var count = 0;
        var fieldname = $(this).attr("name");
        $(this).attr('name', fieldname + count);
        count++;
    });

    });

    $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.remove').remove();
        e.preventDefault();
    });

</script>
</html>

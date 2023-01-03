<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/admin">< Back</a>
    <h2>{{$movies->id}}</h2>
    <h2>{{$movies->title}}</h2>
    <h2>{{$movies->description}}</h2>
    <h2>{{$movies->genre}}</h2>
    <h2>{{$movies->actor}}</h2>
    <h2>{{$movies->character_name}}</h2>
    <h2>{{$movies->director}}</h2>
    <h2>{{$movies->release_date}}</h2>
    <img width="200px" height="200px" src="../{{$movies->image_thumbnail}}" alt="">
    <img width="200px" height="200px" src="../{{$movies->background}}" alt="">



    <form action="/update-movie/{{$movies->id}}" method="post">
        @csrf
        <input type="submit" value="Update Movie">
    </form>
    <form action="/delete-movie/{{$movies->id}}" method="post">
        @csrf
        <input type="submit" value="Delete Movie">
    </form>
</body>
</html>

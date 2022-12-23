<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Admin Page</h1>
    <a href="/create-movie">Create</a>
    <a href="/update-movie">Update</a>

    <h1>Movie List</h1>


    @foreach ($movies as $movie)
        <h2>{{$movie->id}}</h2>
        <a href={{ url('/detail-movie/'.$movie->id) }}><h2>{{$movie->title}}</h2></a>
        <img width="200px" height="200px" src="{{$movie->background}}" alt="">
        <img width="200px" height="200px" src="{{$movie->image_thumbnail}}" alt="">
    @endforeach

    <form action="/logout" method="get">
        <input type="submit" value="LOGOUT">
    </form>
</body>
</html>

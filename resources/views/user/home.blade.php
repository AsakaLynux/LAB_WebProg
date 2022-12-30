<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border: 1px solid black
    }
    th, td {
        padding: 5px
    }
</style>
<body>
    <h1>User Page</h1>

    <h1>Movie List</h1>


    @foreach ($movies as $movie)
        <h2>{{$movie->id}}</h2>
        <a href="{{ url('/detail-movie/'.$movie->id) }}"><h2>{{$movie->title}}</h2></a>
        <img width="200px" height="200px" src="{{$movie->background}}" alt="">
        <img width="200px" height="200px" src="{{$movie->image_thumbnail}}" alt="">

    @endforeach


    <h1>Actor List</h1>
    @foreach ($actor as $actor)
        <h2>{{$actor->id}}</h2>
        <a href="{{ url('/detail-actor/'.$actor->id) }}"><h2>{{$actor->name}}</h2></a>
        <img width="200px" height="200px" src="{{$actor->image_url}}" alt="">


    @endforeach
    {{-- <h1>{{$user->id}}</h1> --}}

    <form action="/logout" method="get">
        <input type="submit" value="LOGOUT">
    </form>

    @foreach ($user as $user)
        <h2>{{$user->username}}</h2>
        <h2>{{$user->id}}</h2>
        <h2>{{$user->email}}</h2>
    @endforeach

    {{-- <a href="{{ url('/profile/'.$user->id) }}">Profile</a> --}}
</body>
</html>

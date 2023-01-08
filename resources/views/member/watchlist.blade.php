<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @foreach ($watchlists as $watchlist)
        <h1> User id: {{$watchlist->user_id}}</h1>
        <h1>Movies id: {{$watchlist->movies_id}}</h1>
        <h1>{{$movie->title}}</h1>
        <h1>Watchlist status: {{$watchlist->status}}</h1>
    @endforeach

    @foreach ($users as $movie)
        <h1>{{$movie->id}}</h1>
        <h1>{{$movie->title}}</h1>
    @endforeach --}}


    @foreach ($users as $movie)
        <h1>title: {{$movie->title}}</h1>
        <h1>desc: {{$movie->description}}</h1>
        <img src="../{{$movie->background}}" width="100px" height="100px" alt="">
    @endforeach

    @foreach ($watchlists as $watchlist)

    <h1>Watchlist status: {{$watchlist->status}}</h1>

    @endforeach


</body>
</html>

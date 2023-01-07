<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($watchlists as $watchlist)
        {{-- <h1>{{$watchlist->user_id}}</h1> --}}
        <h1>{{$watchlist->movies_id}}</h1>
        @foreach ($watchlist->movie as $movie)
            <h1>{{$movie->title}}</h1>
        @endforeach
        <h1>{{$watchlist->status}}</h1>
    @endforeach
</body>
</html>

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
    <h2>{{$actor->id}}</h2>
    <h2>{{$actor->name}}</h2>
    <h2>{{$actor->gender}}</h2>
    <h2>{{$actor->biography}}</h2>
    <h2>{{$actor->place_of_birth}}</h2>
    <h2>{{$actor->popularity}}</h2>
    <img width="200px" height="200px" src="../{{$actor->image_url}}" alt="">

    <form action="/update-actor/{{$actor->id}}" method="post">
        @csrf
        <input type="submit" value="Update Actor">
    </form>
    <form action="/delete-actor/{{$actor->id}}" method="post">
        @csrf
        <input type="submit" value="Delete Actor">
    </form>
</body>
</html>

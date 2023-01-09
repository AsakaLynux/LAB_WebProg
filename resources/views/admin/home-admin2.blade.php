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
<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 5px;
    }
    input{
        margin-top: 8px;
    }
</style>
<body>
    <h1>Admin Page</h1>
    <br><a href="/create-movie">Create Movie</a>
    <br><a href="/create-actor">Create Actor</a>



    <h1>Movie List</h1>

    <form action="/admin" method="get">
        <input type="text" name="searchMovie" placeholder="Search....">
        <button type="submit">Search</button>
    </form>
    <form action="/admin" method="get">
        @foreach ($genres as $genre)
            <input type="radio" name="genre" value="{{$genre->genre}}">
            <label>{{$genre->genre}}</label>
        @endforeach
        <button type="submit">Genre</button>
        {{-- <button type="submit">Reset</button> --}}
    </form>
    <div class="table">
        <table>
            <thead>
                <th>Movie ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Actor</th>
                <th>Character Name</th>
                <th>Director</th>
                <th>Release date</th>
                <th>Image</th>
                <th>Background</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                   <tr>
                        <td>{{$movie->id}}</td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->description}}</td>
                        <td>{{$movie->genre}}</td>
                        <td>{{$movie->actor}}</td>
                        <td>{{$movie->character_name}}</td>
                        <td>{{$movie->director}}</td>
                        <td>{{$movie->release_date}}</td>
                        <td><img width="200px" height="200px" src="{{$movie->image_thumbnail}}" alt=""></td>
                        <td><img width="200px" height="200px" src="{{$movie->background}}" alt=""></td>
                        <td>
                            <form action="/detail-movies/{{$movie->id}}" method="POST">
                                @csrf
                                <input type="submit" value="Detail">
                            </form>
                        </td>
                   </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{-- {{$movies->links()}} --}}


    <h1>Actor List</h1>
    <form action="/admin" method="get">
        <input type="text" name="searchActor" placeholder="Search....">
        <button type="submit">Search</button>
    </form>
    <div class="table">
        <table>
            <thead>
                <th>Actor ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Biography</th>
                <th>Date of Birth</th>
                <th>Place of Birth</th>
                <th>popularity</th>
                <th>Image</th>
            </thead>
            <tbody>
                @foreach ($actors as $actor)
                   <tr>
                        <td>{{$actor->id}}</td>
                        <td>{{$actor->name}}</td>
                        <td>{{$actor->gender}}</td>
                        <td>{{$actor->biography}}</td>
                        <td>{{$actor->place_of_birth}}</td>
                        <td>{{$actor->popularity}}</td>
                        <td><img width="200px" height="200px" src="{{$actor->image_url}}" alt=""></td>
                        <td>
                            <form action="/detail-actors/{{$actor->id}}" method="POST">
                                @csrf
                                <input type="submit" value="Detail">
                            </form>
                        </td>
                   </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <form action="/logout" method="get">
        <input type="submit" value="LOGOUT">
    </form>
</body>
</html>

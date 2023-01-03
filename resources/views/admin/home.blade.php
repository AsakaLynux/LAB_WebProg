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

    <div class="table">
        <table>
            <thead>
                <th>Movie ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Actor 1</th>
                <th>Actor 2</th>
                <th>Character Name 1</th>
                <th>Character Name 2</th>
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
                        <td>{{$movie->actor1}}</td>
                        <td>{{$movie->actor2}}</td>
                        <td>{{$movie->character_name1}}</td>
                        <td>{{$movie->character_name2}}</td>
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

    <h1>Actor List</h1>

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

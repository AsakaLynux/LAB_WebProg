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

    <table>
        <thead>
            <th>Movie ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Genre</th>
            <th>Actor</th>
            <th>Character Name</th>
            <th>director</th>
            <th>Release Date</th>
            <th>Thumbnail</th>
            <th>background</th>

        </thead>
        <tbody>
            @foreach ($movies as $movie)
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
            @endforeach
        </tbody>
    </table>



    <form action="/logout" method="get">
        <input type="submit" value="LOGOUT">
    </form>
</body>
</html>

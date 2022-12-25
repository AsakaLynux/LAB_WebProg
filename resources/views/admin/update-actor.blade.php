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
<body>
    <h1>Edit Page</h1>

    <h1>Edit Actor</h1>
    <h1>Insert Actor</h1>
    <form action="/update-actor" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="gender">Gender</label>
        <input type="text" name="gender">

        <label for="biography">Biography</label>
        <input type="text" name="biography">

        <label for="dob">Date of Birth</label>
        <input type="date" name="dob">

        <label for="place_of_birth">Place of Birth</label>
        <input type="text" name="place_of_birth">

        <label for="insertImage">Image</label>
        <input type="file" id="insertImage" name="image">

        <label for="popularity">Popularity</label>
        <input type="text" name="popularity">

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
</html>

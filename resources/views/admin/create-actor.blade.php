<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Insert Actor</h1>
    <form action="/create-actor" enctype="multipart/form-data" method="POST">
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

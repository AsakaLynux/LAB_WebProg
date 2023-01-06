<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update-profile" method="POST">
        @csrf
        <input type="hidden" name="id_update" value="{{$user->id}}">
        <input type="text" name="username" placeholder="{{$user->username}}">
        <input type="email" name="email" placeholder="{{$user->email}}">
        <input type="date" name="dob" placeholder="Date of Birth">
        <input type="text" name="phone" placeholder="{{$user->phone}}">
        <label for="insertImage">Image Url: </label>
        <input type="file" name="image">
        <input type="submit" value="Update">
    </form>
</body>
</html>

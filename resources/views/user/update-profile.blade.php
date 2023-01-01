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
        <input type="text" name="username" placeholder="{{$user->username}}" id="username">
        <input type="email" name="email" placeholder="{{$user->email}}" id="email">
        <input type="date" name="dob" id="dob" placeholder="Date of Birth">
        <input type="text" name="phone" id="phone" placeholder="{{$user->phone}}">
        <label for="insertImage">Background Url </label>
        <input type="file" id="insertImage" name="ImageProfile">
        <input type="submit" value="update">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach ($users as $user)
<form action="/user" method="POSt">
    @csrf
    <input type="hidden" value="{{$user->email}}" name="email">
    <h1>{{$user->username}}</h1>
    <h1>{{$user->email}}</h1>
    <h1>{{$user->dob}}</h1>
    <h1>{{$user->phone}}</h1>
    <img idth="200px" height="200px" src="../{{$user->image_url}}" alt="">
    <br><input type="submit" value="Back">

    {{-- <br><a href=>Update Profile</a> --}}

</form>
<form action="/update-profile/{{$user->id}}" method="post">
    @csrf
    <input type="hidden" name="email" value="{{$user->email}}">
    <button type="submit">Update Profile</button>
</form>
@endforeach



</body>
</html>

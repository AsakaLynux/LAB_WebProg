<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    <h1>Login</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="email" id="email" value={{Cookie::get('myCookie') !== null ? Cookie::get('myCookie') : ""}}>
        <input type="password" name="password" placeholder="password" id="password">
        <input type="checkbox" name="remember" id="Remember" checked{{Cookie::get('myCookie') !== null }}> Remember Me
        <input type="submit" value="login">
    </form>
</body>
</html>

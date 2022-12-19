<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>
<body>
    <h1>Register</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="/register" method="POST">
        @csrf
        <input type="username" name="username" placeholder="username" id="username">
        <input type="email" name="email" placeholder="email" id="email">
        <input type="password" name="password" placeholder="password" id="password">
        <input type="password" name="confirmPassword" placeholder="confirmPassword" id="confirmPassword">
        <input type="submit" value="register">
    </form>
    <a href="/login">Have an account</a>
</body>
</html>

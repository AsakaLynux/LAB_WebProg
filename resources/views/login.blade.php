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
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="email" id="email">
        <input type="password" name="password" placeholder="password" id="password">
        <input type="submit" value="login">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
    <title>MovieList</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <!-- Logonya -->
                <img class="navbar-brand movielogo" src="storage/images/assets/movielist-logo.png" alt="">
                <!-- Bagian kanan -->
                <div class="d-flex navbar-container">
                    @foreach ($users as $user)
                    <a class="navbar-text" href="/user" type="submit">Home</a>
                    <a class="navbar-text" href="/movies">Movies</a>
                    <a class="navbar-text" href="/actors">Actors</a>
                    <a class="navbar-text" href="/watchlist/{{$user->id}}">Watchlist</a>
                    <div class="dropdown dropdown-profile rounded-circle">
                        <a class="" href="#" data-bs-toggle="dropdown" data-bs-theme="dark" aria-expanded="false"><img
                                src="storage/images/assets/profile-pict.jpg" width="40" height="40"
                                class="rounded-circle"></a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                            <li><a class="dropdown-item" href="/profile/{{$user->id}}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="get">
                                    <input type="submit" value="Log Out" class="dropdown-item">
                                </form>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('contents')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <footer class="bg-dark text-center text-white mt-5">
        <!-- Logo buat footer -->
        <div>
            <img class="movielogo-footer" src="storage/images/assets/movielist-logo.png" alt="">
        </div>
        <!-- Logo buat text footer -->
        <div>
            <img class="footer-movielogo" src="storage/images/assets/movielist-logo.png" alt="">
            is a website that contains list of movie
        </div>
        <!-- text sekaligus link text footer -->
        <div class="d-flex justify-content-center">
            <a class="footer-text" href="#">Privacy Policy</a>
            <p class="footer-text">|</p>
            <a class="footer-text" href="#">Terms of Service</a>
            <p class="footer-text">|</p>
            <a class="footer-text" href="#">Contact Us</a>
            <p class="footer-text">|</p>
            <a class="footer-text" href="#">About Us</a>
        </div>
        <!-- Copyright footer -->
        <div class="text-center p-3 footer-text" style="background-color: rgba(0, 0, 0, 0.2);">Copyright © 2021<img
                class="footer-movielogo" src="storage/images/assets/movielist-logo.png" alt=""></div>
    </footer>
</body>

</html>

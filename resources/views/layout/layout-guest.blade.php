<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>MovieList</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <!-- Logonya -->
                <img class="navbar-brand movielogo" src="../storage/images/assets/movielist-logo.png" alt="">
                <!-- Bagian kanan -->
                <div class="d-flex navbar-container">
                    <a class="navbar-text" href="/">Home</a>
                    <a class="navbar-text" href="/movis">Movies</a>
                    <a class="navbar-text" href="#">Actors</a>
                    <a class="btn btn-secondary navbar-content" href="/register" role="button">Register</a>
                    <a class="btn btn-danger navbar-content" href="/login" role="button">Login</a>
                </div>
            </div>
          </nav>
    </header>

    @yield('contents')

    <footer class="bg-dark text-center text-white mt-5">
        <!-- Logo buat footer -->
        <div>
            <img class="movielogo-footer" src="../storage/images/assets/movielist-logo.png" alt="">
        </div>
        <!-- Logo buat text footer -->
        <div>
            <img class="footer-movielogo" src="../storage/images/assets/movielist-logo.png" alt="">
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
        <div class="text-center p-3 footer-text" style="background-color: rgba(0, 0, 0, 0.2);">Copyright © 2021<img class="footer-movielogo" src="../storage/images/assets/movielist-logo.png" alt=""></div>
    </footer>
</body>
</html>

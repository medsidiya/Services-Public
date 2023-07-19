

{{-- <ul class="navbar">
    <li><a href="{{route("main")}}">Home</a></li>
    <li><a href="about">about</a></li>
    <li><a href="contact">contact</a></li>
</ul> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


{{-- <!-- Start Navbar --> --}}
    <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
    <a class="navbar-brand" href="#">Pubic Services</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link p-lg-3 active" aria-current="page" href="{{route("main")}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-lg-3" href="about">about</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-lg-3" href="services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-lg-3" href="contact">Contact</a>
        </li>
        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a href="/login" class="btn btn-primary rounded-pill main-btn ms-4 d-none d-lg-block">Se Connecter</a>
    </div>
    </div>
    </nav>
{{-- <!-- End Navbar --> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

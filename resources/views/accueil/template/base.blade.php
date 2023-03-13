<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Carousel-images.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
    <div class="container">
        <a class="navbar-brand fs-4 fw-bold" href="#" style="margin-right: 497px;">kim logement</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <a class="navbar-brand" href="#" style="margin-right: 12px;">Nos Agents</a>
            <a class="navbar-brand" href="#">Nos immobilier</a>
            <a class="navbar-brand" href="#">nous contacter</a>
            <div class="dropdown">
                <button style="background: transparent;border: none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>Connexions</strong>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Agent registration</a></li>
                    <li><a class="dropdown-item"  href="#" data-bs-toggle="modal" data-bs-target="#agentcon">Agent connexion</a></li>
                    <li><a class="dropdown-item" href="#">Acheteur registration</a></li>
                    <li><a class="dropdown-item" href="#">Acheteur conncexion</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@yield("body-content")

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
</body>

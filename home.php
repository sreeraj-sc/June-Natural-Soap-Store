<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUNE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css" type="text/css">
    <link rel="icon" href="images/June-logo-3.png" type="image/png" sizes="16x16">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-primary navbar-expand-lg">
            <div class="container-fluid row">
                <div class="col">
                    <a class="title" href="#"><h5>JUNE</h5></a>
                </div>
                <div class="col">
                    <form class="d-flex">
                        <input class="form-control me-2 search_bar search_input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark search_btn" type="submit">Search</button>
                    </form>
                </div>
                <div class="col" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown m-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Log in
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Switch to another ac</a></li>
                                <li><a class="dropdown-item" href="#">profile</a></li>
                                <li><a class="dropdown-item" href="index.html">log out</a></li>
                            </ul>
                        </li>
                        <li class="nav-item m-3">Support</li>
                        <li class="nav-item m-3">WishList</li>
                        <li class="nav-item m-3">Cart</li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h5>JUNE</h5></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">chocolate</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            catogory
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">chocolate</a></li>
                                <li><a class="dropdown-item" href="#">vanilla</a></li>
                                <li><a class="dropdown-item" href="#">strowberry</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">vanilla</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container-fluid">
            <div class="gallery-container">
                <div class="gallery">
                    <img src="soap/Snapchat-1914282164.jpg" alt="Image 1">
                    <img src="soap/Snapchat-1669480039.jpg" alt="Image 2">
                    <img src="soap/Snapchat-20742154.jpg" alt="Image 3">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <div class="feet">
                <p>contact us</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlausBlog</title>

    <link rel="stylesheet" href="/css/reset.css">

    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/coin-slider.css" />


    <link rel="stylesheet" href="/css/style.css">



    <script src="/js/jquery-3.5.1.min.js"></script>

    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" />

    <script src="/js/jquery.mousewheel.js"></script>
    <script src="/js/coin-slider.min.js"></script>


    <script src="/js/script.js"></script>
</head>

<body class="container px-0">
    <header class="container px-0">
        <div class="container">
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand my-2" href="#"><img src="/images/logo.png" alt=""></a>
                    </div>

                    <div>
                        <p class="h5 text-center text-white">Что нужно, чтобы наслаждаться жизнью?.. </p>
                        <p class="h5 text-center text-white">Смотреть вокруг себя.</p>
                    </div>

                    <div class="border border-dark rounded">
                        <form class="d-flex bg-dark justify-content-end ">
                            <input class=" bg-dark border-0  pl-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark btn-sm" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <button class="navbar-toggler  bg-dark border border-dark rounded text-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse  bg-dark border border-dark rounded" id="navbarNav">
                <ul class="navbar-nav px-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><span class="active">Главная</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><span>Обо мне</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><span>Контакты</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/views/admin/index.php"><span>Админка</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
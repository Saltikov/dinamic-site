<?php 
include "path.php";
include "app/controllers/topics.php";
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Домашние животные</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

<!-- Подключаемся к папке include откуда берем шапблон header -->
<?php include("app/include/header.php");?>

    <!-- Блок карусели старт-->
     <div class="container">
        <div class="row">
            <h2 class="slider-title">
                Лучшие картинки
            </h2>
        </div>

    
    <div id="carouselExampleCaptions" class="carousel slide">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="">Первый слайд</a> </h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="">Второй слайд</a> </h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="">Третий слайд</a> </h5>
            </div>
        </div>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
    </div>
 </div>
    <!-- Блок карусели конец -->
<!-- Main start-->
 <div class="conteiner">
    <div class="content row">
        <!--Main content-->
        <div class="main-content col-md-9 col-12">
            <h2>Последняя публикация</h2>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамический сайт...</a>
                    </h3>
                    <i class="far fa-user">Автор</i>
                    <i class="far fa-calendar">Август 27 2026 год</i>
                    <p class="preview-text">
                        Что-то должно быть записано, но пока в голову ничего не приходит блаблаблабла
                        блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамический сайт...</a>
                    </h3>
                    <i class="far fa-user">Автор</i>
                    <i class="far fa-calendar">Август 27 2026 год</i>
                    <p class="preview-text">
                        Что-то должно быть записано, но пока в голову ничего не приходит
                        Что-то должно быть записано, но пока в голову ничего не приходит блаблаблабла
                        блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамический сайт...</a>
                    </h3>
                    <i class="far fa-user">Автор</i>
                    <i class="far fa-calendar">Август 27 2026 год</i>
                    <p class="preview-text">
                        Что-то должно быть записано, но пока в голову ничего не приходит блаблаблабла
                        блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамический сайт...</a>
                    </h3>
                    <i class="far fa-user">Автор</i>
                    <i class="far fa-calendar">Август 27 2026 год</i>
                    <p class="preview-text">
                        Что-то должно быть записано, но пока в голову ничего не приходит
                        Что-то должно быть записано, но пока в голову ничего не приходит блаблаблабла
                        блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла блаблаблаблаблаблаблабла
                    </p>
                </div>
            </div>
        </div>
        <!--sidebar Content-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Поиск</h3>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Поиск ...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категория</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                    <li>
                        <a href="#"><?=$topic['name']; ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Main END-->
<!--Footer Start-->
<!--Прописываем путь к footer -->
<? include("app/include/footer.php"); ?>
<!--Footer END-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
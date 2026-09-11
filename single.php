<?php include("path.php");?>
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


<!-- Main start-->
 <div class="conteiner">
    <div class="content row">
        <!--Main content-->
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>
            <div class="single_post row">
                <div class="img col-12">
                    <img src="assets/images/1.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="info">
                     <i class="far fa-user">Автор</i>
                    <i class="far fa-calendar">Август 27 2026 год</i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Заголовок статьи</h3>
                    <p><a href="#"> Домашние животные </a>— это не просто «звери, живущие рядом с человеком». Это уникальный биологический и социальный феномен, изменивший ход человеческой цивилизации. Если посмотреть на историю шире,</p>
                    <p> то можно смело утверждать: без животных не было бы нас сегодняшних. Они помогли нам выжить в ледниковый период, охраняли наши жилища, добывали пищу, а затем, когда необходимость в суровой практичности отпала,</p>
                    <p>они стали для нас психотерапевтами, друзьями и полноправными членами семей.</p>
                    <p>Сегодняшний мир невозможно представить без кота, греющегося на подоконнике, или собаки, виляющей хвостом у двери. Но за этой идиллией стоит глубочайшая трансформация отношений, которую ученые называют «симбиозом привязанности».</p>
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
                    <li><a href="#">Программирование</a></li>
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Визуалицация</a></li>
                    <li><a href="#">Кейсы</a></li>
                    <li><a href="#">Мотивация</a></li>
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
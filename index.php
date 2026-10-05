<?php 
    include "path.php";
    include "app/controllers/topics.php";

    // Пагинация
    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $limit = 4;
    $offset = $limit * ($page - 1);
    $total_pages = round(countRow('posts') / $limit, 0);

    $posts = selectAllFromPostsWithhUserOnIndex('posts','users', $limit, $offset);
    $toptopic = selectTopTopicFromPostsOnIndex('posts');
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
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
                Топ публикации
            </h2>
        </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <?php foreach ($toptopic as $key => $post): ?>
                <?php if($key == 0): ?>
                    <div class="carousel-item active">
                <?php else: ?>
                <div class="carousel-item">
                <?php endIF; ?>
                        <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title'] ?>" class="d-block w-100">
                        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                            <h5><a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 120) . '...' ?></a></h5>
                        </div>
                    </div>
            <?php endforeach; ?>
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
            <?php foreach ($posts as $post): ?>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title'] ?>" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 80) . '...' ?></a>
                    </h3>
                    <i class="far fa-user"><?=$post['username']; ?></i>
                    <i class="far fa-calendar"><?=$post['created_date']; ?></i>
                    <p class="preview-text">

                        <?=mb_substr($post['content'] , 0,  50, 'UTF-8') . '...' ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- Навигация -->
            <?php include("app/include/pagination.php"); ?>
        </div>
        <!--sidebar Content-->

        <div class="sidebar col-md-3 col-12">


            <div class="section search">
                <h3>Поиск</h3>
                <form action="search.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите слово">
                </form>
            </div>

            <div class="section topics">
                <h3>Категория</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                    <li>
                        <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Main END-->
<!--Footer Start-->

<? include("app/include/footer.php"); ?>
<!--Footer END-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
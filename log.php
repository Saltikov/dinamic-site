<?php 
include "path.php";
include "app/controllers/users.php";
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

<!--FROM-->
<div class="conteiner reg_form">
    <form class="row  justify-content-center" method="post" action="log.php">
        <h2>Авторизация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg;?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-md-auto col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваша почта(при регистрации)</label>
            <input type="email" class="form-control" value="<?=$email?>" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='Введите почту при регистрации'>
        </div>
        <div class="w-100"></div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-auto col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder='Введите пароль'>
    </div>
    <div class="w-100"></div>
     <div class="mb-3 col-md-auto col-12 col-md-4">
        <button type="submit" name="button-log" class="btn btn-secondary">Войти</button>
        <a href="aut.html">Зарегистрироваться</a>
     </div>
    </form>
</div>
<!--END FROM-->
<!--Прописываем путь к footer -->
<!--Footer START-->
<? include("app/include/footer.php"); ?>
<!--Footer END-->
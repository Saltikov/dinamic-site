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
    <form class="row  justify-content-center" method="post" action="reg.php">
        <h2>Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg ?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-md-auto col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Логин</label>
            <input  name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
        </div>
        <div class="w-100"></div>
    <div class="mb-3 col-md-auto col-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
        <input type="email" class="form-control" value="<?=$email?>" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='Введите вашу почту'>
        <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-auto col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input name="pass-first" type="pass-first" class="form-control"  id="exampleInputPassword1" placeholder='Введите пароль'>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-auto col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword1" placeholder='Повторите пароль'>
    </div>
    <div class="w-100"></div>
     <div class="mb-3 col-md-auto col-12 col-md-4">
        <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
        <a href="aut.html">Авторизоваться</a>
     </div>
    </form>
</div>
<!--END FROM-->
<!--Footer start-->
<!--Прописываем путь к footer -->
<? include("app/include/footer.php"); ?>
<!--Footer END-->
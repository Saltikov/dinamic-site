
<?php 

include "../../path.php";
include "../../app/controllers/users.php";
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Домашние животные</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

<!-- Подключаемся к папке include откуда берем шапблон header -->
<?php include "../../app/include/header_admin.php"; ?>
<div class="container">
<?php include '../../app/include/sidebar_admin.php'; ?>
        
        <div class='posts col-9'>
            <div class="button-row">
                <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-3 btn btn-success">Создать </a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Создать пользователя</h2>
            </div>
            <div class="row add-post">
                <div class="mb-12 col-12 col-mb-12 err">
                    <!-- Выводит массив с ошибкой -->
                    <?php include "../../app/helps/errorinfo.php"; ?>
                </div>
                <form action="create.php" method="post">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Логин</label>
                            <input  name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                            <input type="email" class="form-control" value="<?=$email?>" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='Введите вашу почту'>
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input name="pass-first" type="pass-first" class="form-control"  id="exampleInputPassword1" placeholder='Введите пароль'>
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
                            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword1" placeholder='Повторите пароль'>
                        </div>
                         <input type="checkbox" name="admin" value="1">
                            <label>
                                Admin?
                            </label>
                         <div class="col">
                            <button name="create-user" class="btn btn-primary" type="submit">Создать</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Footer Start-->
<!--Прописываем путь к footer -->
<? include "../../app/include/footer.php"; ?>
<!--Footer END-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
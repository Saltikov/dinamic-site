
<?php 

include "../../path.php";
include "../../app/controllers/posts.php";
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
            <div class="row title-table">
                <h2>Редактирование записи</h2>
            </div>
            <div class="row add-post">
                <div class="mb-12 col-12 col-mb-12 err">
                    <!-- Выводит массив с ошибкой -->
                    <?php include "../../app/helps/errorinfo.php"; ?>
                </div>
                <form  action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$id;?>">                    
                        <div class="col mb-4">
                            <input value="<?=$post['title'];?>" name="title" type="text" class="form-control" placeholder="Статья" aria-label="Название статьи">
                        </div>
                        <div class="col">
                            <label for="content" type="file" class="form-label">Содержимое записи</label>
                            <textarea name="content" class="form-control" id="contetn" rows="6"><?=$post['content'];?></textarea>
                        </div>
                        <div class="col">
                                <input name="img" type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Загрузка</label>
                        </div>
                        <select name="topic" class="form-select" aria-label="Пример выбора по умолчанию">
                                <?php foreach($topics as $key => $topic ): ?>
                                     <option value="<?=$topic['id'];?>"><?=$topic['name'];?></option>
                                <?php endforeach; ?>
                        </select>
                        <div class="col col-6">
                            <?php if (empty($publish) && $publish == 0 ): ?>
                                <input type="checkbox" name="publish">
                                <label>
                                    Publish
                                </label>
                            <?php else: ?>
                                <input type="checkbox" name="publish" checked>
                                <label>
                                    Publish
                                </label>
                            <?php endif?>
                        </div>
                         <div class="col col-6">
                            <button name="edit_post" class="btn btn-primary" type="submit">Сохранить запись</button>
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

<script> src="../../assets/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
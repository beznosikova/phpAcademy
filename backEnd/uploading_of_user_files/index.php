<?php
/* Написать скрипт для загрузки пользовательских файлов.
 * При загрузке, в зависимости от типа файла – он на сервере должен помещаться в папку /doc, или /img..etc

 * Должно быть ограничение на прием файлов – не более 2 мб.

 * Ссылку на форму загрузки разместить на главной странице сайта.

 * После добавления файлов, при заходе на главную, пользователь должен видеть галерею ранее загруженных картинок,
 * и список загруженных документов (все, что не картинки).
 * */

require_once "functions.php";

$dir = "./";
$arDirTree = dirTree($dir); ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Фаловый менеджер</title>
</head>
<body>
<div class="form">
    <?php
    if (!empty($arDirTree)):
        ?>
        <div id="gallery">
            <?php printTree($arDirTree);?>
        </div>
    <?php
    endif;
    ?>
    <div class="form__row">
        <h5><a href="load.php">Загрузите каринку в галлерею</a></h5>
    </div>
</div>
</body>
</html>
<?php
/*
 * загрузка файлов
 * */

require_once "functions.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Загрузка файлов</title>
</head>
<body>
<div class="form">
    <?php
    if (!empty($_FILES)){
        $file = $_FILES["file"];
        if ($file["error"] == UPLOAD_ERR_OK) {
            // check file size
            if ($file["size"] > 2000000)
                pr("Your file size is bigger 2M");
            else
                $result = saveFile($file);
        }
        if (!$result){?>
            <div class="form__row">
                <p>Файл не сохранен</p>
            </div>
        <?} else {?>
            <div class="form__row">
                <p>Файл сохранен</p>
            </div>
        <?}
    }
?>
    <div class="form__row">
        <h5>Загрузите файл</h5>
    </div>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form__row">
            <input type="file" id='file' name='file'/>
        </div>

        <div class="form__row">
            <input name="send" type="submit" value="Отправить">
        </div>
    </form>
    <div class="form__row">
        <h5><a href="index.php">Перейти к сиску файлов</a></h5>
    </div>
</div>
</body>
</html>
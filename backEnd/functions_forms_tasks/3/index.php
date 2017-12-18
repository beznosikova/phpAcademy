<?php
require_once "../common.functions.php";
require_once "functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<div class="form">
    <?php
    if (!empty($_POST['length']) && !empty($_POST['file_name'])){
        $wordLength = $_POST['length'];
        $fileName = $_POST['file_name'];
        deleteLongWords($wordLength, $fileName);
    }?>
    <div class="form__row">
        <h5>Введите длину слов N,<br/> слова больше которой будут удалены из файла</h5>
    </div>
    <form action="" method="post">

        <div class="form__row">
            <label for="length">Длина слова:</label>
            <input type="text" id='length' name='length' value="<?=$wordLength?>"/>
        </div>

        <div class="form__row">
            <label for="file_name">Название файла:</label>
            <input type="text" id='file_name' name='file_name' value="<?=$fileName?>"/>
        </div>

        <div class="form__row">
            <input name="send" type="submit" value="Отправить данные">
        </div>
    </form>
</div>
</body>
</html>
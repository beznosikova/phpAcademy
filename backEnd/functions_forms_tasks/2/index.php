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
    <?if (!empty($_POST)):
        $message = $_POST['message'];
        $top3Words = getTop3LongWords($message);
        ?>
        <div class="form__error">
            <pre>
                <?=pr($top3Words)?>
            </pre>
        </div>
    <?endif;?>
    <form action="" method="post">
        <div class="form__row">
            <h5>ТОП3 длинных слов</h5>
        </div>

        <div class="form__row">
            <label for="message">Введите сообщение:</label>
            <textarea id='message' name='message'><?=$message?></textarea>
        </div>

        <div class="form__row">
            <input name="send" type="submit" value="Отправить данные">
        </div>
    </form>
</div>
</body>
</html>
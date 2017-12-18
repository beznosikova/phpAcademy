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
        $message_first = $_POST['message_first'];
        $message_second = $_POST['message_second'];
        $commonWords = getCommonWords($message_first, $message_second);
        ?>
        <div class="form__error">
            <pre>
                <?=pr($commonWords)?>
            </pre>
        </div>
    <?endif;?>
    <form action="" method="post">
        <div class="form__row">
            <h5>Введите два текста для выделения общих слов</h5>
        </div>

        <div class="form__row">
            <label for="message_first">Первое сообщение:</label>
            <textarea id='message_first' name='message_first'><?=$message_first?></textarea>
        </div>
        <div class='form__row'>
            <label for='message_second'>Второе сообщение:</label>
            <textarea id='message_second' name='message_second'><?=$message_second?></textarea>
        </div>
        <div class="form__row">
            <input name="send" type="submit" value="Отправить данные">
        </div>
    </form>
</div>
</body>
</html>
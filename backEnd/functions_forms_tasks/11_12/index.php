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
        $text = $_POST['text'];
        $newText = firstLetterUp($text);
        $reverseText = reverseText($newText);
        ?>
        <div class="form__error">
            <pre>
                <?=pr($newText)?>
            </pre>
        </div>
        <div class="form__error">
            <pre>
                <?=pr($reverseText)?>
            </pre>
        </div>
    <?endif;?>
    <form action="" method="post">
        <div class="form__row">
            <h5>Поставим большие буквы в начале предложения<br> и выведем предложения в обратном порядке</h5>
        </div>

        <div class="form__row">
            <label for="text">Текст:</label>
            <input type="text" id='text' name='text' value="<?=$text?>"/>
        </div>

        <div class="form__row">
            <input name="send" type="submit" value="Отправить данные">
        </div>
    </form>
</div>
</body>
</html>
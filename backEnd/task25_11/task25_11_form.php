<?php
/*
 * Создать форму, которая содержит поля name, email, phone.
 * Задать скрипт, который выведет на экран отправленные данные -
 * $_POST или $_GET (в зависимости от свойств формы)
 * */

/* Создать форму с полями username, email, message. Сериализовать данные,
 * полученные при отправке формы и вывести полученную строку на экран.
 * */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="form">
    <?if (!empty($_REQUEST)):?>
        <div class="form__error">
            <pre>
                <?=var_export($_REQUEST)?>
            </pre>
        </div>
        <div class="form__error">
                <?=var_export(serialize($_REQUEST))?>
        </div>
    <?endif;?>
    <form action="" method="post">
        <div class="form__row">
            <label for="name">Имя:</label>
            <input id="name" name="name" type="text" value="<?=$_REQUEST['name']?>" />
        </div>
        <div class="form__row">
            <label for="email">E-mail:</label>
            <input id="email" name="email" type="email" value="<?=$_REQUEST['email']?>" />
        </div>
        <div class="form__row">
            <label for="phone">Телефон:</label>
            <input id="phone" name="phone" type="text" value="<?=$_REQUEST['phone']?>" />
        </div>
        <div class='form__row'>
            <label for='mes'>Сообщение:</label>
            <textarea id='mes' name='message'><?=$_REQUEST['message']?></textarea>
        </div>
        <div class="form__row">
            <input name="send" type="submit" value="Отправить данные">
        </div>
    </form>
</div>
</body>
</html>

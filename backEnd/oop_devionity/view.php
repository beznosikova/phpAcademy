<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
<div class="form">
    <div class="form__title">
        <h1>Введите данные:</h1>
    </div>
    <?if (!empty($_POST)):?>
        <div class="form__error">
            <?if (!$saveResult)
                echo "Ошибка сохранения данных!";
            else
                echo "Данные успешно сохранены!";?>
        </div>
    <?endif;?>
    <div class="form__error" id="contactError"></div>
    <form action="" method="post" id="contactForm">
        <div class="form__row">
            <label for="name">Имя:</label>
            <input id="name" name="name" type="text" value="" placeholder="Имя" />
        </div>
        <div class="form__row">
            <label for="email">E-mail:</label>
            <input id="email" name="email" type="email" value=""  placeholder="your@mail.com"/>
        </div>
        <div class="form__row">
            <label for="phone">Телефон:</label>
            <input id="phone" name="phone" type="text" value="" placeholder="+38 (067) 700-00-07" />
        </div>
        <div class='form__row'>
            <label for='mes'>Сообщение:</label>
            <textarea id='mes' name='message'></textarea>
        </div>
        <div class="form__row">
            <input name="send" type="submit" value="Отправить данные">
        </div>
    </form>
</div>
</body>
</html>

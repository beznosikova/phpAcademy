<?php
require_once "../common.functions.php";
require_once "functions.php";

$dir = $_SERVER['DOCUMENT_ROOT']."/backEnd/functions_forms_tasks/7_8/comments/";
$commentsCount = count(scandir($dir)) - 1;

$badWords = ['мат', 'секс'];
$errorStr = "";
$newComment = $_POST['comment'];

if (!empty($newComment)){
    $errorStr = checkComment($badWords, $newComment);
    if ($errorStr === '')
        writeToFile($dir."{$commentsCount}.txt", strip_tags($_POST['comment'],'<b>'));
}

$allComments = getComments($dir);
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
    if (!empty($allComments)){
        foreach ($allComments as $key =>$comment){?>
            <div class="form__row">
                <h5>Комментарий <?php echo $key;?></h5>
                <?php echo $comment;?>
            </div>
        <?}
    }?>

    <div class="form__row"><hr/></div>
    <?php if ($errorStr != ""):?>
        <div class="form__error"><?php echo $errorStr;?></div>
    <?php endif;?>
    <form action="" method="post">
        <div class="form__row">
            <label for="comment">Оставьте комментарий:</label>
            <textarea id='comment' name='comment'></textarea>
        </div>

        <div class="form__row">
            <input name="send" type="submit" value="Отправить">
        </div>
    </form>
</div>
</body>
</html>
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
    $dir = "./gallery/";

    if (!empty($_FILES)){
        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["file"]["tmp_name"];
            $name = basename($_FILES["file"]["name"]);
            move_uploaded_file($tmp_name, "$dir/$name");
        }
    }
    $files = getDirFiles($dir);
    if (!empty($files)):
        ?>
        <div id="gallery">
            <?php foreach ($files as $file):?>
                <img src="<?=$dir.$file?>"/>
            <?php endforeach;?>
        </div>
    <?php
    endif;
    ?>
    <div class="form__row">
        <h5>Загрузите каринку в галлерею</h5>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="500000">

        <div class="form__row">
            <input type="file" id='file' name='file'/>
        </div>

        <div class="form__row">
            <input name="send" type="submit" value="Отправить картинку">
        </div>
    </form>
</div>
</body>
</html>
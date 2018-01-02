<?php
$userName = getUserName();
echo render('hello.php', [
    'name' => $userName
]);
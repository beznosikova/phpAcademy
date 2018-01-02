<?php
$viewedPages = $_SESSION['userPages'];
echo render('pagelist.php', [
    'pages' => $viewedPages
]);
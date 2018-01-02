<?php
/*
 * Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя,
 * запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
 * */

session_start();

$actions = [
    'home',
    'hello'
];
$action = $_GET['action'] ?? 'home';
if (!in_array($action, $actions)) {
    die('Page not found');
}
require __DIR__ . '/pages/' . $action . '.php';

function render(string $view, array $items = []) : string
{
    extract($items, EXTR_SKIP);
    ob_start();
    require __DIR__ . '/views/' . $view;
    return ob_get_clean();
}
function getUserName() : string
{
    if (!empty($_SESSION['userName']))
        return $_SESSION['userName'];
    else
        return "";
}
function setUserName($inputName) : bool
{
    if (empty($inputName))
        return false;

    $_SESSION['userName'] = $inputName;
    return true;
}
?>
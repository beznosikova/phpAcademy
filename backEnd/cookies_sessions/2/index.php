<?php
/*
 * Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
 * */

session_start();

$actions = [
    'home',
    'hello',
    'contacts',
    'pagelist',
];
$action = $_GET['action'] ?? 'home';
if (!in_array($action, $actions)) {
    die('Page not found');
}

changeViewedPages("$action.php");
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
    return $_SESSION['userName'] ?? '';
}

function setUserName($inputName) : bool
{
    if (empty($inputName))
        return false;

    $_SESSION['userName'] = $inputName;
    return true;
}

function changeViewedPages($pageName)
{
    if (empty($_SESSION['userPages']))
        $userPages = array();
    else
        $userPages = $_SESSION['userPages'];

    if (in_array($pageName, $userPages)) {
        $key = array_search($pageName, $userPages);
        unset($userPages[$key]);
    }
    $userPages[] = $pageName;
    $_SESSION['userPages'] = $userPages;
}
?>
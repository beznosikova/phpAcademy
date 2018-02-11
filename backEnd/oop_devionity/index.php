<?php
use Devionity\DataBase;

require_once "config.php";

if (!empty($_POST['phone']) && !empty($_POST['message'])) {

    try {
        foreach ($_POST as &$param){
            $param = htmlspecialchars($param);
        }
        $callBack = new Devionity\ContactForm($_POST);
        $saveResult = Devionity\DataBase::addCallBack($callBack);
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

}

//echo "<pre>";
//print_r(Devionity\DataBase::getCallBacks());
//echo "</pre>";

require_once "view.php";
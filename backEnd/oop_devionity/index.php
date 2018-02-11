<?php
use Devionity\{DataBase, ContactForm};

require_once "autoload.php";
require_once "config/db.php";

$formData = $_POST;
if (!empty($formData)) {

    foreach ($formData as &$param){
        $param = htmlspecialchars($param);
    }

    $callBack = new ContactForm($formData);
    if ($callBack->validate()) {

        try {
            $saveResult = $callBack->addToDB();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

    }

}

require_once "view.php";
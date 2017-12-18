<?php
require_once "../common.functions.php";
require_once "functions.php";
echo "<h5>Directory without filter:</h5>";
printDirFiles($_SERVER['DOCUMENT_ROOT']."/backEnd/functions_forms_tasks");

$filter = 'style';
echo "<h5>Directory with filter '$filter': </h5>";
printDirFiles($_SERVER['DOCUMENT_ROOT']."/backEnd/functions_forms_tasks", $filter);


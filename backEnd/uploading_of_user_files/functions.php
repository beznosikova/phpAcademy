<?php
function pr($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

/**
 * save file in directory depending on the file type
 * @param array $file
 * @return bool
 */
function saveFile(array $file)
{
    $dirName = explode("/", $file["type"])[0];

    if (!is_dir($dirName)){
        // creating dir
        mkdir($dirName);
    }

    $tmp_name = $file["tmp_name"];
    $name = basename($file["name"]);
    return move_uploaded_file($tmp_name, "$dirName/$name");
}

/**
 * read dir
 * @param $dir
 * @param int $level
 * @return mixed
 */
function dirTree($dir, $level=0)
{
    $d = dir($dir);
    while (false !== ($entry = $d->read())) {
        if($entry == '.' || $entry == '..')
            continue;

        if (is_dir($dir.$entry)){
            $arDir[$entry] = dirTree($dir.$entry.'/', $level+1);
        } elseif ($level > 0) {
            $arDir["files"][] = $entry;
        }
    }
    $d->close();
    return $arDir;
}

function printTree($array, $level=0)
{
    foreach($array as $key => $value) {
        if ($key != "files")
        echo "<div class='form__row' style='padding-left: ".($level*20)."px;'>&nbsp;".$key."</div><br/>\n";
        if(is_array($value) && $key != "files")
            printTree($value, $level+1);
        else
            printFiles($value, $level);
    }
}

function printFiles($files, $level = 0)
{
    foreach ($files as $file){
        echo "<div class='form__row' style='padding-left: ".($level*20)."px;'>$file</div>";
    }
    echo "<br>";
}
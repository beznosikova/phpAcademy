<?php
function printDirFiles(string $root = '.', string $word = '')
{
    $lastLetter  = $root[strlen($root)-1];
    $root  = ($lastLetter == '\\' || $lastLetter == '/') ? $root : $root.DIRECTORY_SEPARATOR;

    if (is_dir($root)) {
        if ($dh = opendir($root)) {
            pr("directory: ".$root);
            while (($file = readdir($dh)) !== false) {
                if ($file === "." || $file === "..")
                    continue;

                if(is_file($root.$file)){
                    if (!empty($word) && (preg_match("/$word/", $file)))
                        pr("file:".$file);
                    elseif (empty($word))
                        pr("file:".$file);
                }
            }
            closedir($dh);
        }
    }
}

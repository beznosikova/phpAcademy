<?php
function getDirFiles(string $root = '.', string $word = ''): array
{
    $filesUrls  = array();
    $lastLetter  = $root[strlen($root)-1];
    $root  = ($lastLetter == '\\' || $lastLetter == '/') ? $root : $root.DIRECTORY_SEPARATOR;

    if (is_dir($root)) {
        if ($files = scandir($root)) {
            foreach ($files as $file){
                if ($file === "." || $file === "..")
                    continue;
                $filesUrls[] = $file;
            }
        }
    }

    return $filesUrls;
}

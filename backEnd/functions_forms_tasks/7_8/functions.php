<?php
function writeToFile(string $fileName, string $comment)
{
    $crlf = "\r\n";
    $handle = fopen($fileName, "a");
    fwrite($handle, $comment.$crlf);
    fclose($handle);
}

function checkComment(array $badWords, string $comment):string
{
    $commentWords = separateText($comment);

    if (array_intersect($commentWords, $badWords))
        return "Некорректный комментарий";
    else
        return "";
}

function getComments(string $root = '.'): array
{
    $comments  = array();
    $lastLetter  = $root[strlen($root)-1];
    $root  = ($lastLetter == '\\' || $lastLetter == '/') ? $root : $root.DIRECTORY_SEPARATOR;

    if (is_dir($root)) {
        if ($files = scandir($root)) {
            foreach ($files as $file){
                if ($file === "." || $file === "..")
                    continue;
                $comments[] = file_get_contents($root.$file);
            }
        }
    }

    return $comments;
}
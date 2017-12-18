<?php
function reverseString(string $text): string
{
    $length = mb_strlen($text);
    $chars = [];

    for ($i = 0; $i < $length; $i++){
        $chars[] = mb_substr($text,$i,1);
    }

    return implode(array_reverse($chars));
}
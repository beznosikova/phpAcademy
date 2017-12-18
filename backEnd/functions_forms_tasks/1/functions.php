<?php

function getCommonWords(string $textFirst, string $textSecond): array
{
    $wordsFromTextFirst = separateText(trim($textFirst));
    $wordsFromTextSecond = separateText(trim($textSecond));
    $commonWords = [];

    foreach ($wordsFromTextFirst as $word){
        if (in_array($word, $wordsFromTextSecond)){
            $commonWords[] = $word;
        }
    }
    return $commonWords;
}

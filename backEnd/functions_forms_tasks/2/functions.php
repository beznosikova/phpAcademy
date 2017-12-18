<?php
function getTop3LongWords(string $text): array
{
    $wordsFromText = separateText(trim($text));
    $wordsLengthes = [];
    $length = 0;

    foreach ($wordsFromText as $word){
        $length = mb_strlen($word);
        $wordsLengthes[$length][] = $word;
    }
    krsort($wordsLengthes);
    $wordsLengthes1 = array_values($wordsLengthes);

    return array_slice($wordsLengthes1, 0, 3);
}


<?php
function firstLetterUp(string $text): string
{
    $sentences = separateText(trim($text), ".");
    $newSentences = array_diff($sentences, array(""));

    foreach ($newSentences as &$sentence){
        if (!empty($sentence)){
            $sentence = trim($sentence);
            $firstLetter = mb_strtoupper(mb_substr($sentence, 0, 1));
            $endSentence = mb_substr($sentence, 1);
            $sentence = $firstLetter . $endSentence;
        }
    }
    return implode(". ", $newSentences).".";
}

function reverseText(string $text): string
{
    $sentences = separateText(trim($text), ".");
    $newSentences = array_diff($sentences, array(""));
    krsort($newSentences);

    return implode(". ", $newSentences).".";
}
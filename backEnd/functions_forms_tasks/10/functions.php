<?php
function uniqWords(string $text): int
{
    $words = separateText(trim($text));
    return count(array_unique($words));
}

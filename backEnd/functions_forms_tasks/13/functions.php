<?php
function calculateWordsCounts(string $text): array
{
    $words = separateText(trim($text));
    $counts = [];
    foreach ($words as $word){
        $currentCount = (isset($counts[$word]))? $counts[$word] : 0;
        $currentCount++;
        $counts[$word] = $currentCount;
    }
    arsort($counts);

    return $counts;
}
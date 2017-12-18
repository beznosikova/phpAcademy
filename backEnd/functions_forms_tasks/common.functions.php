<?php
function pr($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function separateText(string $text, $separator = " ", $delComas = true):array
{
    if ($delComas)
        $text = preg_replace("/[,.;:]+/",$separator, $text);
    $text = preg_replace("/  +/",$separator, $text);

    return explode($separator, $text);
}
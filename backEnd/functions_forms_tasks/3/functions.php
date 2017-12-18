<?php
/**
 * @param $wordLength
 * @param $fileName
 */
function deleteLongWords(string $wordLength, string $fileName)
{
    if (is_file($fileName)){
        $lines = file($fileName);

        $newLines = [];
        foreach ($lines as $line){
            if (empty($line))
                $newLines[] = $line;
            else
                $newLines[] = deleteLongWordsFromLine((int) $wordLength, $line);
        }
        changeFile($fileName, $newLines);
    }
}

/**
 * @param $wordLength
 * @param $line
 * @return string
 */
function deleteLongWordsFromLine(int $wordLength, string $line):string
{
    $lineWords = [];
    $lineWords = separateText($line, ' ', false);
    foreach ($lineWords as $key => $word){
        if (preg_match("/[,.;:]+/", $word)){
            $wordWithoutComas = preg_replace("/[,.;:]+/", "", $word);
            if (mb_strlen($wordWithoutComas) > $wordLength)
                unset($lineWords[$key]);
        } else {
            if (mb_strlen($word) > $wordLength)
                unset($lineWords[$key]);
        }

    }
    return implode(" ", $lineWords);
}

/**
 * @param $fileName
 * @param $textLines
 */
function changeFile(string $fileName, array $textLines)
{
    $crlf = "\r\n";
    $textToFile = "";
    foreach ($textLines as $line){
        $textToFile .= $line . $crlf;
    }

    $handle = fopen($fileName, "w");
    fwrite($handle, $textToFile);
    fclose($handle);
}
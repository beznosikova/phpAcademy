<?php
/*
 * Создать текстовый файл, в котором будет 10 строк.
 * В первой строке записать 1, во второй 22, в третьей 33, ...,
 * в десятой - десять десяток
 * */

$strToFile = "";

for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= $i; $j++){
        $strToFile .= "$i";
    }
    $strToFile .= PHP_EOL;
}
$file = fopen("text.txt", 'w');
fwrite($file, $strToFile);
fclose($file);


/*
 * Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 * */
function pr(array $inupArr){
    echo "<pre>";
    print_r($inupArr);
    echo "</pre>";
}

/*
 * Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 * В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r.
 * По умолчанию использовать print_r
 * */

function pr_if(array $inupArr, bool $flag = false){
    echo "<pre>";
    if ($flag == true)
        var_dump($inupArr);
    else
        print_r($inupArr);
    echo "</pre>";
}

pr_if(array(1, 2, 3));
pr_if(array(1, 2, 3),true);

/*
 * Создать функцию, которая принимает один аргумент в виде массива и дописывает в него
 *  последним элементом количество значений массива
 * */

function addArrCount(array &$inupArr){
    $inupArr[] = count($inupArr);
}

$arTest = array(1, 2, "test");
addArrCount($arTest);
pr($arTest);

/*
 * Реализовать функцию, которая определяет, будет ли число простым числом
 * */

function prime_number(int $number): string
{
    $countMult = 1;
    $div = 2;
    while ($countMult == 1){
        if (($number % $div) == 0){
            $countMult++;
            break;
        }
        $div++;
    }
    if ($number == $div)
        return "prime<br>";
    else
        return "not prime<br>";
}

echo prime_number(113);

/*
 * Определить рекурсивную функцию - аналог функции print_r
 * */

function print_array(array $array, int $count = 0) {
    $count = (isset($count)) ? ++$count : 0;
    $tab = "";
    for ($i = 2; $i<= $count; $i++)
        $tab .= "&nbsp;";

    if (!is_array($array)) {
        echo "Argument is not an array!<p>";
        return;
    }

    echo $tab."Array (<br/>";
    foreach ($array as $key => $value){
        echo $tab."[$key] => ";
        if (is_array($value)) {
            echo "<pre>";
            print_array($value, $count);
            echo "</pre>";
        }
        else
            echo "$value<br/>";
    }
     echo $tab.")<br/>";
    $count--;
 }

print_array(array(1, 2, array(2, 4, 6), array(array(2, 3, 4,), 4, 3, 2)));
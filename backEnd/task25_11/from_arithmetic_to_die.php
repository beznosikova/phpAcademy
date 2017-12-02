<?php
/*
 * Вычислить количество секунд в году и присвоить это значение переменной.
 * Вычислить остаток от деления этого значения на 2
 * */

$days = 365;
$hours = 24;
$minutes = 60;
$seconds = 60;
$secondsInYear = $days * $hours * $minutes * $seconds;

echo "Seconds in year: " . number_format($secondsInYear, 0, "."," ")."<br/>";

/*
 * Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации
 * */
$result = "";
for ($number = 1; $number <= 5; $number++)
{
    $result .= $number;
}

echo $result."<br/>";

/*
 * Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.
 * */

$x = 10;
if (($x % 2) > 0)
    echo "false <br/>";
else
    echo "true <br/>";

/*
 * Создать алгоритм обмена значениями двух переменных не используя третьей.
 * */
$a = 10;
$b = 20;
echo "$a и $b<br/>";

$a += $b;
$b = $a - $b;
$a -= $b;
echo "$a и $b<br/> ";

/*
 * I Создать алгоритм вычисления максимального значения двух заданных переменных
 * II Создать алгоритм вычисления максимального значения двух заданных переменных при помощи тернарного оператора
 * Создать алгоритм вычисления максимального значения двух переменных при помощи switch
 * */
//I
$a = 5;
$b = 7;
$max = $a;

if ($a < $b)
    $max = $b;
echo "Максимальное число $max <br/>";
// II
$max = ($a < $b) ? $b : $a;
echo "Максимальное число $max <br/>";

/*
 * Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for.
 * Простое число - это число которое делится только на себя и на 1
 * Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while.
 * */

/*
 * решето Эратосфена
 * */

$max_number = 100;
$primes = [];
$is_composite = [];

for ($i=4; $i<=$max_number; $i+=2){
    $is_composite[$i] = true;
}
$next_prime = 3;
while ($next_prime<=(int)sqrt($max_number)){
    for ($i=$next_prime*2; $i<=$max_number; $i+=$next_prime){
        $is_composite[$i] = true;
    }
    $next_prime += 2;
    while ($next_prime<=$max_number && isset($is_composite[$next_prime])){
        $next_prime+=2;
    }
}

for ($i=2; $i<=$max_number; $i++){
    if (!isset($is_composite[$i]))
        $primes[] = $i;
}
var_export($primes); echo "<br>";
var_export($is_composite); echo "<br>";

/*
 * Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3
 * Выполнить предыдущие задания при помощи альтернативного синтаксиса
 * */
$arNumbers = [10, 5, 6, 8, 1, 9, 12, 33, 45, 87];

foreach ($arNumbers as $number){
    if (($number % 3) == 0)
        echo "$number<br/>";
}
foreach ($arNumbers as $number):
    if (($number % 3) == 0)
        echo "$number<br/>";
endforeach;

/*
 * Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.
 * */

$from = 200;
$to = 400;

for($number = $from; $number <= $to; $number++){
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
        break;
}

echo "Первое простое число $number<br/>";

/*
 * Как можно упростить функцию test() в данном скрипте?
 * */
function test($x, $y)
{
    return ($y == 0) ? false : $x / $y;
}
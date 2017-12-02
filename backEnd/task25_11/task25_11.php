<?php

/*
 * Создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов <pre></pre>
 * */

$arCountries  = ['Ukraine', 'France', 'Poland', 'USA', 'Greece'];

echo "<pre>";
print_r($arCountries);
echo "</pre>";

/*
 * Создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран,
 * а значения элементов - это столицы стран. Вывести массив на экран
 * */

$arAssocCountries  = [
    'Ukraine' => 'Kyiv',
    'France' => 'Paris',
    'Poland' => 'Warszawa',
    'Greece' => 'Athens',
    'Turkey' => 'Ankara'
];

echo "<pre>";
print_r($arAssocCountries);
echo "</pre>";

/*
 * Создать многомерный массив, который иллюстрирует список товаров.
 * Каждый товар - это книга (художественная литература). Каждая книга имеет стиль, автора,
 * название и цену. В списке товаров должно быть не менее 3 книг.
 * */

$arProducts = [
    0 => [
        'style' => 'Tech',
        'name' => 'Modern PHP',
        'price' => 100,
    ],
    1 => [
        'style' => 'Tech',
        'name' => 'Clean code',
        'price' => 200,
    ],
    2 => [
        'style' => 'religion',
        'name' => 'Bible',
        'price' => 300,
    ]
];

echo "<pre>";
print_r($arProducts);
echo "</pre>";

/*
 * Определить константы, которые соответствуют названиям нескольких стран мира.
 * Используя эти константы, сформировать массив из соответствующих значений
 * */

define('UKRAINE', 'Ukraine');
define('FRANCE', 'France');

$arConstants = [UKRAINE , FRANCE];
echo "<pre>";
print_r($arConstants);
echo "</pre>";

/*
 * Создать скрипт, который бы вывел на экран значение переменной $$$$$hello. Значение может быть любым.
 * */

$hello4 = "hello5";
$hello3 = "hello4";
$hello2 = "hello3";
$hello1 = "hello2";
$hello = "hello1";

echo "<pre>";
print_r($$$$$hello);
echo "</pre>";

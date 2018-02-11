<?php
/*Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами */

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}
echo '<p>Ваш массив:</p>';
echo '<pre>';
print_r($arr);
echo '</pre>';

$max = array_search(max($arr), $arr);
$min = array_search(min($arr), $arr);

echo "<p>Максимальное значение: $max</p>";
echo "<p>Минимальное значение: $min</p>";

list($arr[$min], $arr[$max]) = [$arr[$max], $arr[$min]];

echo '<p>Поменяем местами max и min значение </p>';
echo '<pre>';
print_r($arr);
echo '</pre>';


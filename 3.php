<?php
/*Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach
 * foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result*/

$arr = [5, 17, 12, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem * $elem;
}
echo $result;
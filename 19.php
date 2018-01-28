<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day*/
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Sunday', 'Saturday'];
$day = 'Friday';
foreach ($arr as $key => $value) {
    if ($value == $day) {
        echo '<b>' . $value . '</b><br>';
    } else {
        echo $value . '<br>';
    }
}
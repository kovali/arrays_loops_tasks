<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,выходные дни следует вывести жирным */
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Sunday', 'Saturday'];
foreach ($arr as $value) {
    if ($value == 'Sunday' or $value == 'Saturday') {
        echo '<b>' . $value . '</b><br>';
    } else {
        echo $value . '<br>';
    }
}
/*Вам нужно разработать программу,
которая считала бы сумму цифр числа введенного пользователем.
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6*/


<html>

<body>

<form method="get">
<label>
        <input type="number" name="input" id="input" value=""><br>
        <input type="submit" id="ok" value="Сумма"><br>
</label>

    <?php

    $sum = $_GET['input'];

    echo $sum . '<br>';

    $arr = str_split($sum);
    echo '<pre>';
    print_r($arr);

    echo 'Сумма элементов = ' . array_sum($arr) . ' ';
    unset($sum);
    ?>

</form>
</body>

</html>


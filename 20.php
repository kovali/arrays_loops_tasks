<?php
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>
*/
for ($i = 0; $i <= 20; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $str = 'x';
        echo $str;
    }
    echo '<br>';
}

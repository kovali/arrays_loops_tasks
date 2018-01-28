<?php
/* 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>*/

for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $str = 'xx';
        echo $str;
    }
    echo '<br>';
}

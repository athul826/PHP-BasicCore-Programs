<?php
$num = readline("Enter the number :");
if (is_numeric($num) && $num > 0) {
    for ($i = 2; $i * $i <= $num; $i++) {
        while ($num % $i == 0) {
            echo $i . " ";
            $num = $num / $i;
        }
    }
    if ($num > 2) {
        echo $num;
    }
}

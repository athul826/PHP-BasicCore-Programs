<?php
$year = readline("Enter The year:");
if ($year > 999)
    if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
        echo "Leap year\n";
    } else {
        echo "not a leap year";
    }

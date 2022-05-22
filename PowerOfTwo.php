<?php
// program to find the power of two.
$number = readline("Enter the number:");
if ($number >= 0 && $number < 31) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result = $result * 2;
    }
    echo "the result is " . $result;
} else {
    echo "invalid Number";
}

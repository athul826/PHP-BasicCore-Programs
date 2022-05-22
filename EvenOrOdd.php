<?php
// Program to check given number is even or odd
$count = 0;
while ($count != 2) {
    $chekNumber = readline("Enter the number:");
    if ($chekNumber % 2 == 0) {
        echo "The Number is Even\n";
    } else {
        echo "the Number is Odd\n";
    }
}

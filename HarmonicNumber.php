<?php
// program to find the harmonic series.
$sum = 0;
$n = readline("Enter the Harmonic Value : ");
while ($n > 0) {
    $sum += (1.0) / $n;
    $n--;
}
echo "Harmonic Sum is :" . round($sum, 2);

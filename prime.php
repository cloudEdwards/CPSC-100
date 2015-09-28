<?php

$isprime = true;
$i = 2;
$j;

while ($i <= 100) {
    $i ++;
    $isprime = true;
    $j = 2;
    while ($j <= ($i/$j) ) {

        if ($i % $j == 0) {
            $isprime = false;
        }
        $j++;
    }
    if ($isprime) { // if you leave it like this it is the same as -> if ($isprime == true)
        echo $i .' is a prime number<br>';
    }
}

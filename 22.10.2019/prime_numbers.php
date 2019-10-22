<?php
function isPrime($number)
{
    if ($number < 2) {
        return 'This number is not valid';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $divider++;

        }
        if ($number == $divider) {
            return $number . 'is prime number<br>';

        } else $number . 'is not a prime number<br>';
    }
}

$result = isPrime(rand(0, 99));
echo $result;
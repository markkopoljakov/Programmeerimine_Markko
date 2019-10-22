<?php
$number = 15;
if ($number < 0) {
    //$number = $number * -1;
    $abs = $number *= -1;

} else {
    $abs = $number;
}
echo $number . ' absoluutväärtuson ' . $abs;
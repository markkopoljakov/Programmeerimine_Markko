<?php
$circleRadius = $_GET['circle-radius'];
// var_dump($circleRadius);
// $sum = $circleRadius +  $circleRadius;
// var_dump($sum);
// arvutused
$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCircumference = 3.14 * 2 * $circleRadius;
echo 'Raadius =' . $circleRadius . '<br>';
echo '<hr>';
echo 'Ringi pindala = ' . $circleArea . ' <br>';
echo 'Ringi ümbermõõt = ' . $circleCircumference . ' <br>';
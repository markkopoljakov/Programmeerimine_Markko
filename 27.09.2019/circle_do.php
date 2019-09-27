<?php
$circleRadius = $_GET['circle-radius'];
// var_dump($circleRadius);
// $sum = $circleRadius +  $circleRadius;
// var_dump($sum);
// arvutused
$circleArea = round(pi() * $circleRadius * $circleRadius, 3);
$circleArea = pi() * 2 * $circleRadius * $circleRadius;
$circleCircumference = pi() * 2 * $circleRadius;
// $circleAreaRound = round($circleArea, 3);
$circleArea = round($circleArea, 3);


echo 'Raadius =' . $circleRadius . '<br>';
echo '<hr>';
echo 'Ringi pindala = ' . $circleArea . ' <br>';
echo 'Ringi ümbermõõt = ' . $circleCircumference . ' <br>';
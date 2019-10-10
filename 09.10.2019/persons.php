<?php
$age = 10;
echo 'Vanus =' . $age . '<br>';
// 0-17 - laps
if ($age > 0 and $age < 18) {
    echo 'Oled laps<br>';
}
if ($age > 17 and $age < 66) {
    echo 'Oled täiskasvanu<br>';
}
if ($age > 65) {
    echo 'Oled senioor<br>';
}
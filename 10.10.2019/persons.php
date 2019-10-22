<?php
$age = 20;
echo 'Vanus =' . $age . '<br>';
// 0-17 - laps
if ($age > 0 and $age < 18) {
    echo 'Oled laps<br>';
} else if ($age > 17 and $age < 66) {
    echo 'Oled täiskasvanu<br>';
} else if ($age > 65) {
    echo 'Oled senioor<br>';
} else {
    echo 'midagi on valesti<br>';
}
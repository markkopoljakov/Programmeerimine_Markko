<?php
$birthYear = $_GET['birthYear'];
$age = 2019 - $birthYear;
if (strlen($birthYear) > 0) {
    if ($birthYear % 5 == 0) {
        echo 'sul on juubel oled' . $age . 'aastat vana';

    } else {
        echo 'Sul on täna sünnipäev, oled' . $age . 'aastat vana';
    }

}
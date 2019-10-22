<?php
$number = 25;
$numberFromUser = $_GET['number'];
if (strlen($numberFromUser) > 0) {
    $diff = abs($numberFromUser - $number);
    if ($numberFromUser == $number) {
        echo 'Arvasid ära!' . $number . '!';
    } else {
        if ($diff <= 5) {
            echo 'Tubli, suht close';
        }
        if ($numberFromUser > $number) {
            echo 'pakutud number on suurem';
        } else {
            echo 'liiga väike!';
        }
    }
} else {
    echo ' Tuleb pakkuda number!';
}
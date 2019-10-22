<?php
$nation = $_GET['Nation'];
$age = $_GET['Age'];
$edu = $_GET['Edu'];

if (strlen($nation) > 0 and strlen($age) > 0 and strlen($edu) > 0) {
    if ($nation != 'eestlane') {
        echo 'Kodakontsus ei sobi <br>';
    } else {
        if ($age < 18) {
            echo 'oled liiga noor<br>';
        }
        if ($edu != 'Pohi' and $edu != 'kesk' and $edu != 'kutse' and $edu != 'korg') {
            echo 'Haridustase ei ole sobilik <br>';
        } else {
            echo 'Kodakontsus - ' . $nation . '<br>';
            echo 'Vanus - ' . $age . '<br>';
            echo 'Haridus - ' . $edu . '<br>';
            echo 'sobivus';
        }
    }
} else {
    echo 'ei sobi';

}

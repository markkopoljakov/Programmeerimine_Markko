<?php
$numberOne = $_GET ['numberOne'];
$numberTwo = $_GET ['numberTwo'];
var_dump($numberOne);
var_dump($numberTwo);

/*if (strlen($numberOne) > 0 and strlen($numberTwo) > 0 and $numberTwo !=0) {
    echo 'Andmed olemas';

}else if ($numberTwo == '0') {
    echo 'Jagaja ei saa olla 0';
    }
    else {
            echo 'Tuleb sisestada mõlemad numbrid';
        }*/
if (strlen($numberOne) > 0 and strlen($numberTwo) > 0) {
    if ($numberOne > $numberTwo) {
        echo $numberOne . ' on suurem kui' . $numberTwo;
    } elseif ($numberTwo < $numberOne) {
        echo $numberOne . ' On väiksem kui' . $numberTwo;

    } else {
        echo $numberOne . 'On võrdne' . $numberTwo;
    }
}

?>
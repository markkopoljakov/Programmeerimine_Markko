<?php
$maxCount = 10000;
$count = 1;
$sum = 0;
while ($count <= $maxCount) {
    $element = 1 / (2 * $count - 1);
    if ($count % 2 != 0) {
        $sum = $sum + $element;
    } else {
        $sum = $sum - $element;

    }
    $count++;

}
echo 'pi=' . ($sum * 4) . '<br>';
echo 'pi=' . pi();
<?php

$eesnimi = "Markko";
$perenimi = "Poljakov";
$vanus = 20;
$pikkus = 1.89;
$kaal = 80;

echo "Eesnimi: " . $eesnimi . "<br>";
echo "Perenimi: " . $perenimi . "<br>";
echo "Vanus: " . $vanus . "<br>";
echo "Pikkus:" . $pikkus . "<br>";
echo "Kaal: " . $kaal . "<br>";

$kmi = $kaal / ($pikkus * $pikkus);
echo "Minu kehamassiindeks:" . $kmi . "<br>";
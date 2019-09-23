<?php
$FirstName = $_GET ['FirstName'];
$LastName = $_GET ['LastName'];
$Age = $_GET ['Age'];;
$Height = $_GET ['Height'];
$Weight = $_GET ['Weight'];

echo '<h1>Minu Andmed</h1>';
echo 'Eesnimi: ' . $FirstName . '<br>';
echo 'Perenimi: ' . $LastName . '<br>';
echo 'Vanus: ' . $Age . '<br>';
echo 'Pikkus: ' . $Height . '<br>';
echo 'Kaal: ' . $Weight . '<br>';
echo '<br>';
$bmi = $Weight / ($Height * $Height);
echo '<b>' . $FirstName . $LastName . '</b>, Sinu KMi on' . $bmi . '<br>';
echo '<br>';
echo '<a href="input.php">Proovi Veel</a>';



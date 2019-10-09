<html>
<meta charset="utf-8">
<meta name="description" content="HTML">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Markko Poljakov">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    table, th, td {
        border: 1px solid #333;
        border-collapse: collapse;

    }

    th, td {
        padding: 0.5rem;
        text-align: center;
    }

    th {
        background: orange;
    }

    }
</style>

<body>
</html>
<?php
$x = 8;
$y = 2;

$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$divide = $x / $y;
$residual = $x % $y;
echo ' 
<table>
<thread>
<tr>
<th>Operaator</th>
<th>Nimetus</th>
<th>Näide</th>
<th>Tulemus</th>
</tr>
</thread>
<tbody>
<tr>
<td>x * y</td>
<td>Korrutamine</td><td>' . $x . ' * ' . $y . '</td>
<td>' . $product . '</td>
</tr>
<tr>
<td>x / y</td>
<td>Jagamine</td><td>' . $x . ' / ' . $y . '</td>
<td>' . $divide . '</td>
</tr><tr>
<td>x % y</td>
<td>Jääk</td><td>' . $x . ' % ' . $y . '</td>
<td>' . $residual . '</td>
</tr><tr>
<td>x - y</td>
<td>Lahutamine</td><td>' . $x . ' - ' . $y . '</td>
<td>' . $diff . '</td>
</tr>
</tbody>
</table>
 ';
?>



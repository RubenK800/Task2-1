<?php
$integerArray = array();

for($x = 0; $x<6; ++$x) {
    $min = 1;
    $max = 100;
    $integerArray[$x] = rand($min,$max);
}

var_dump($integerArray);
echo "</br>";
echo "</br>";

$integerArray = array_unique($integerArray);
rsort($integerArray);

echo "<table style = 'border: 1px solid black'>";
for($x = 0; $x<count($integerArray); ++$x) {
    $orderNumber = $x+1;
    echo "<tr style = 'width:200px'>";
        echo "<td style = 'border: 1px solid black; width: 100px'>$orderNumber</td>";
        echo "<td style = 'border: 1px solid black; width: 100px'>$integerArray[$x]</td>";
    echo "</tr>";
}
echo "</table>";
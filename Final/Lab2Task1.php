<?php
// Declare the 2D array
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "First Shape:\n";
echo "-----------\n";
for ($i = 0; $i < 3; $i++) {
    echo "| ";
    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "|\n";
}

echo "\n\nSecond Shape:\n";
echo "------------\n";
for ($i = 0; $i < 3; $i++) {
    echo "| ";
    // First part: numbers
    if ($i == 0) {
        echo "1 2 3";
    } elseif ($i == 1) {
        echo "12";
    } elseif ($i == 2) {
        echo "1";
    }

    echo " | ";

    // Second part: letters
    if ($i == 0) {
        echo "A";
    } elseif ($i == 1) {
        echo "B C";
    } elseif ($i == 2) {
        echo "D E F";
    }

    echo " |\n";
}
?>
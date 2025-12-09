<?php
// Declare the 2D array
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "First Shape:\n";
// Print the first shape (as stored in array)
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "\n";
}

echo "\nSecond Shape:\n";
// Print the second shape (modified arrangement)
for ($i = 0; $i < 3; $i++) {
    // First part: numbers
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j];
    }
    
    echo " | ";
    
    // Second part: letters
    for ($j = 3 - $i; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "\n";
}
?>
<?php
$originalArray = array(1, 2, 3, 4, 5);
$location = 4;
$newItem = '$';

// Insert the new item into the original array at the specified location
array_splice($originalArray, $location - 1, 0, $newItem);

// Display the modified array
echo implode(' ', $originalArray) . "\n";
?>


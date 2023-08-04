<?php
echo <<< 'now'
5.	Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $

Expected Output: 1 2 3 $ 4 5

<br>
<br>
now;
$originalArray = array(1, 2, 3, 4, 5);
$location = 4;
$newItem = '$';

// Insert the new item into the original array at the specified location
array_splice($originalArray, $location - 1, 0, $newItem);

// Display the modified array
echo implode(' ', $originalArray) . "\n";
?>


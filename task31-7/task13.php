<?php
echo nl2br("Task13 : 13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24'




") ;
$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>

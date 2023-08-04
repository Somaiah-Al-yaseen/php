<?php
echo nl2br("Task16 : 16.	Write a PHP script to remove Special characters from the following string. 

Sample Output: '\"\1+2/3*2:2-3/4*3'
Expected Output: '1 2 3 2 2 3 4 3'





") ;
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>

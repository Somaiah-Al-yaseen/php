<?php
echo nl2br("Task17 : 17.	Write a PHP script to select first 5 words from the following string. 

Sample Output: 'The quick brown fox jumps over the lazy dog'
Expected Output: 'The quick brown fox jumps'




") ;
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

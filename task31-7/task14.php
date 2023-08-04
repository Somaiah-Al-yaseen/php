<?php
echo nl2br("Task14 :14.	Write a PHP script to remove part of a string. 

Original String: 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output: 'The quick brown jumps over the lazy dog'




") ;
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>

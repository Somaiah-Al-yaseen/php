<?php
echo nl2br("Task15 : 15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog'




") ;
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-')."\n";
?>

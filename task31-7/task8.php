<?php
echo nl2br("Task8 : 8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius.



") ;
$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'Our', $str, 1)."\n"; 
?>
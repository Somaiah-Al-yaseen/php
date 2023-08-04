<?php
echo nl2br("Task11 : 11.	Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a'



") ;
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>

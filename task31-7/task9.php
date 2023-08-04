<?php
echo nl2br("Task9 : 9.	Write a PHP script to find the first character that is different between two strings. 

String1 : 'dragonball'
String2 : 'dragonboll'
Expected Result : First difference between two strings at position 7: \"a\" vs \"o\"



") ;
$str1 =  'dragonball';
$str2 = 'dragonboll' ;
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
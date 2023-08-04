<?php
echo nl2br("Task19 : 19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z 



") ;
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>

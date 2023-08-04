<?php
echo nl2br("Task10 : 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: \"Twinkle, twinkle, little star.\"
Expected Result: array (4) {[0] => string (30) \"Twinkle, \" [1] => string (26) \" twinkle,\" [2] => string (27) twinkle\" [3] => string (26) \" little star.\”}



") ;
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>

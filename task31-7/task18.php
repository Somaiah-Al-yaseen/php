<?php
echo nl2br("Task18 : 18.	Write a PHP script to remove comma(s) from the following numeric string.
 
Sample Output: '2,543.12'
Expected Output: 2543.12



") ;
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>

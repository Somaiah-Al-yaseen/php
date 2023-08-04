<?php
echo nl2br("13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12
<br>") ;
$number = range(11,20) ;
shuffle($number) ;
echo implode("," , $number ) ;
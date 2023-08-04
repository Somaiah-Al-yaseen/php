<?php
echo <<<'now'

6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange

<br>
now;
nl2br("") ;
$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
asort($fruits) ;
echo "<br>" ;
echo "<pre>" ;
print_r( $fruits) ;

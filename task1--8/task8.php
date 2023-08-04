<?php
echo <<< 'now'
8.	Write a PHP program to merge the following two arrays. 

Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4

<br>
now;

$array1 = array("color"=> "red" , 2 , 4) ;
$array2 =array("a" , "b" , "color"=>"green" , "shape"=>"trapezoid", 4) ;
echo "<pre>" ;
print_r(array_merge($array1,$array2)) ; 

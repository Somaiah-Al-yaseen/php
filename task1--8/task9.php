<?php
echo <<< 'now'
9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

Sample Input:

$colors = array("red","blue", "white","yellow");

Expected Output :

Array
(
    RED
    BLUE
    WHITE
    YELLOW

)

<br>
now;
$colors = array("red","blue", "white","yellow");

foreach($colors as $value ){
    echo strtoupper($value) ."<br>";
}
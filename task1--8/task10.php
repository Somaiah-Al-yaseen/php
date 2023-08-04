<?php
echo <<< 'now'
10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

Sample Input:

$colors = array("RED","BLUE", "WHITE","YELLOW");

Expected Output :

Array
(
    red
    blue
    white
    yellow

)

<br>
now;

$colors = array("RED","BLUE", "WHITE","YELLOW");

foreach($colors as $value){
    echo strtolower($value) ."<br>";

} ;
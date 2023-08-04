<?php

echo nl2br("11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248
 
<br>") ;
for ($x=200 ; $x<=250 ; $x++) {
    if($x % 4 == 0 ) {
echo $x ."   " ;
    }

}

//easier
// echo implode(",",range(200,250,4));

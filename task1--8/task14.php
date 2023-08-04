<?php
echo <<< 'now'
14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2

<br>
now;

$smallest = 300 ;
$num = array(2, 0, 10, 12, 6) ;
for ($i=0 ; $i<=count($num)-1 ; $i++ ) {
    if ($num[$i] == 0 ){
        continue ;
    }
    if ($num[$i] < $smallest  ){
        
        $smallest = $num[$i] ;
    }
    
}

echo $smallest ;
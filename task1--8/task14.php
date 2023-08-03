<?php


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
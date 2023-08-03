<?php

$tempurture= [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73] ;
echo "Average Temperature is: " .array_sum($tempurture) / count($tempurture) ."<br>";
// echo count($tempurture) ;
// echo array_sum($tempurture) ;
asort($tempurture) ;
// echo "<pre>" ;
// print_r($tempurture) ;
 echo "<br>"."List of seven highest temperatures: " ;
 $sliice =(array_slice($tempurture,-5 , 5 ,true))  ;
 echo implode(" ",$sliice);
 echo "<br>" ;



 echo "<br>"."List of seven lowest temperatures: "  ;
 $slice = array_slice($tempurture,0 , 5 ,true) ;
 echo implode(" ",$slice);


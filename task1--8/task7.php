<?php
echo nl2br("7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85,
<br>
") ;

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


<?php

// for ($x=1 ; $x<=5 ; $x++) {
//     for ($y=1 ; $y<$x; $y++){
//         echo $y ."<br>" ;
//     }
// }


$n = 5; 
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
<?php
//how to declaire the constant
define("MAIN_NUMBER" , 6) ;

ECHO MAIN_NUMBER*5 ;

ECHO "<br>" ;

define("NAME" , "somaiah") ;


echo NAME ;

//predefine constant
echo PHP_VERSION ;
echo "<br>" ;
echo PHP_INT_MAX ."<br>" ;

ECHO __LINE__  ."<br>" ;
echo __FILE__  ."<br>" ;
echo __dir__  ."<br>" ;


echo "<br>" ."<br>" ."<br>"."<br>"."<br>" ;

//convert string to intger
echo   "100"."<br>"  ;
echo gettype("100") ."<br>";
echo gettype(-"100")."<br>" ;
echo   -"100"."<br>"  ;



//assignment operators
echo "<br>" ;
echo "<br>" ;

$b = 20 ;
$b +=20 ;
//$b = $b +20 ;
echo $b ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;
 echo 32 %10 ;
 echo "<br>" ;

 echo $b%2 ;
 echo "<br>" ;
 echo "<br>" ;

 $c = 5 ;
 $c**= 2 ;
echo $c ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;

//array operators
echo "<pre>" ;
$arry1 = array(1=> 3 , "sara" => "r" , "4" => "dana" , '5' => 300 , "mmeza") ;
$arra2 = array(9=> 500 , "da" => "saya"  ,700000000000, "ma" => "maram" , "saaaad") ;
print_r( $arry1 + $arra2 ) ;






 ?>



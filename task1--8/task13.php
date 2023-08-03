<?php

$number = range(11,20) ;
shuffle($number) ;
echo implode("," , $number ) ;
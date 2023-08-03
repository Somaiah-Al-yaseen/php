<?php

$url =  "https://www.w3schools.com/php/default.asp" ;
$url = parse_url($url) ;
echo "scheme : " .$url['scheme'] ;
echo "<br>" ;
echo "host : " .$url['host'] ;
echo "<br>" ;
echo "path : " .$url['path'] ;
echo "<br>" ;


?>
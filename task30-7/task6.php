<?php
echo nl2br("Task6 :Write a PHP script, which will return the following components of the URL https://www.w3schools.com/php/default.asp.

") ;
$url =  "https://www.w3schools.com/php/default.asp" ;
$url = parse_url($url) ;
echo "scheme : " .$url['scheme'] ;
echo "<br>" ;
echo "host : " .$url['host'] ;
echo "<br>" ;
echo "path : " .$url['path'] ;
echo "<br>" ;


?>
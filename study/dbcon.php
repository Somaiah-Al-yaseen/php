<?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "test1" ;

try {
$conn = NEW PDO("mysql:host=$servername;dbname=$dbname" , $username , $password) ;
$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
echo "Connected successfully" ;
} 
catch(PDOException $e){
  echo "Connection Faild " .$e->getMessage() ;
} ;


?>
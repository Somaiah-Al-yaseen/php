<?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "test" ;

$conn = new mysqli($servername ,$username , $password , $database) ;
if ($conn->connect_error) {
    die("connction faild" .$conn->connect_error )
}
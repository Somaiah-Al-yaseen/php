<?php


    $connect = new mysqli("localhost","root","","connection1") ;
    
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
      }
      echo "Connected successfully";
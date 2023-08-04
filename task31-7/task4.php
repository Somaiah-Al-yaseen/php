<?php
echo nl2br("Task4 : 4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php'



") ;
$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>
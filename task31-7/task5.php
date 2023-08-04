<?php
echo nl2br("Task5 : 5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info'


") ;
$mailid  = 'info@orange.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>
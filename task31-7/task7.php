<?php
echo nl2br("Task7 : 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 

Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'

Expected Output: 254ABCc or h242sfeDAFEe32  -> random number 




") ;
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>
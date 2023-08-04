<?php
echo nl2br("Task3 : 3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: I am a full stack developer at orange coding academy
Sample Word: Orange
Expected Output: Word Found!


") ;
$str1 = 'I am a full stack developer at orange coding academy';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'orange';
 }
else
 {
    echo 'Word Found!';
 }
?>
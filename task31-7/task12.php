<?php
echo nl2br("Task12 : 12.	Write a PHP script to insert a string at the specified position in a given string. 

Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
18. Write a PHP script to get the first word of a sentence. 
Original String: 'The quick brown fox'
Expected Output: 'The'





") ;
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>

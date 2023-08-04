<?php
echo nl2br("Task1 : 1.	Write a PHP script to: 

a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized.

") ;
//all uppercase letters
print(strtoupper("the quick brown fox jumps over the lazy dog."))."<br>";
//all lowercase letters
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."<br>";
// make a string's first character uppercase
print(ucfirst("the quick brown fox jumps over the lazy dog."))."<br>";
// make a string's first character of all the words uppercase
print(ucwords("the quick brown fox jumps over the lazy dog."))."<br>";
?>
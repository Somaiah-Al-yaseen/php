<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input astring here</h2>
 <input type="text" name="x">

 <input type="submit" value="Submit x,y">
 </form>  

<?php
$string=$_POST['x'];
function check_palindrome($string) 
{
  if ($string == strrev($string))
      echo "Yes it is a palindrome";
  else
  echo "No it is'nt a palindrome";
}
echo check_palindrome($string)."\n";
?>
</body>
</html>
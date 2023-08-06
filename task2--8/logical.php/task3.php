<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method='POST'>
<h2>Please input number x</h2>
 <input type="text" name="x">
 <h2>Please input number y</h2>
 <input type="text" name="y">
 <input type="submit" value="Submit x,y">
 </form>
<?php

$x = $_POST['x'];
$y= $_POST['y'];
echo " $x + $y = ";


function test($x, $y) 
{
    if($x == $y) {
        echo ($x+$y)*3;
        echo "<pre>";
        echo "It is summertime!";

    } echo ($x+$y);
}
echo test($x,$y);
?>
</body>
</html>
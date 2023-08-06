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
 <h2>Please input number z</h2>
 <input type="text" name="z">
 <input type="submit" value="Submit">
 </form>
<?php

$x = $_POST['x'];
$y= $_POST['y'];
$z= $_POST['z'];
echo " $x , $y , $z ";


function largest($x, $y, $z) {
    $max = $x;
  
    if ($x >= $y && $x >= $z)
      $max = $x;
    if ($y >= $x && $y >= $z)
      $max = $y;
    if ($z >= $x && $z >= $y)
      $max = $z;
    
    echo "Largest number among $x, $y and $z is: $max\n";
  }
  echo "<br>";
  echo largest($x,$y,$z);
?>
</body>
</html>
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
 <input type="submit" value="Submit x">
 </form>
<?php
$n=$_POST['x'];
function test ($n){
    return $n >=20 && $n <=50 ;
}
echo "$n";
echo"<br>";

var_dump(test($n));
?>
</body>
</html>
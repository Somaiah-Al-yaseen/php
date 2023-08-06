<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input your name</h2>
 <input type="text" name="n">
 <input type="submit" value="Submit ">
 </form>
<?php
$n=$_POST['n'];

function check($n){
    if ($n > 0)
    echo "The entered number $n is positive";
elseif ($n < 0)
    echo "The entered number $n is negative";
else {
    echo "The entered number $n is zero";
}
}
echo check($n);
?>
</body>
</html>
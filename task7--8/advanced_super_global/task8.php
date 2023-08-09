<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$count_page = ("hitcount.txt");
$hits = file($count_page);
$hits[0] ++;

$fp = fopen($count_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo $hits[0];

?>
</body>
</html>
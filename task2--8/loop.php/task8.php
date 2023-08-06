<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Licence: https://bit.ly/2CFA5XY
$string="Orange Coding Academy";
function count_Vowels($string)
{
    preg_match_all('o', $string, $matches);
    return count($matches[0]);
}
echo "cou";


?>
</body>
</html>
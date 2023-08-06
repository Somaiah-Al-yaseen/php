<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h2>Please input your marks</h2>
 <input type="text" name="m1">
 <input type="text" name="m2">
 <input type="text" name="m3">
 <input type="text" name="m4">
 <input type="text" name="m5">
 <input type="text" name="m6">
 <input type="text" name="m7">
 <input type="text" name="m8">
 <input type="text" name="m9">
 <input type="submit" value="Submit ">
 </form>
<?php
$m1=$_POST['m1'];
$m2=$_POST['m2'];

$m3=$_POST['m3'];

$m4=$_POST['m4'];

$m5=$_POST['m5'];

$m6=$_POST['m6'];

$m7=$_POST['m7'];

$m8=$_POST['m8'];

$m9=$_POST['m9'];

function totalgrade($m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9){
    $avrg=($m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9)/9;
    if($avrg <60){
        echo "the averg is : $avrg ,F";
    }
    elseif($avrg <70){
        echo "the averg is :$avrg ,D";
    }
    elseif($avrg <80){
        echo "the averg is :$avrg ,C";
    }
    elseif($avrg <90){
        echo "the averg is :$avrg ,B";
    }
    elseif($avrg <100){
        echo "the averg is :$avrg ,A";
    }
}
echo totalgrade($m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9);
?>
</body>
</html>
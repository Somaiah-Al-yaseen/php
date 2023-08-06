<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
<h1>Simple Calculator</h1><br>
First Number:<input name="n1" value=""><br>
Second Number:<input name="n2" value=""><br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/"><br>

</form>

<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$oprnd=$_POST['sub'];
$ans=0;
function calculater($n1,$n2,$oprnd){
	
	if($oprnd=="+")
		{$ans=$n1+$n2;
        return $ans;}
	else if($oprnd=="-")
		{$ans=$n1-$n2;
        return $ans;}
	else if($oprnd=="x")
		{$ans=$n1*$n2;
        return $ans;}
	else if($oprnd=="/")
		{$ans=$n1/$n2;
        return $ans;}

      
}

echo "Result :";
echo calculater($n1,$n2,$oprnd);
?>
</body>
</html>
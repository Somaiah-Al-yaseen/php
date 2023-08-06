<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method='POST'>
<h2>Please input temperture</h2>
 <input type="text" name="x">
 
 <input type="submit" value="Submit ">
 </form>
 <?php
 $tem=$_POST['x'];
 function season($tem){
    if($tem<20){
        echo "we are in winter  ";
    }else{
        echo "It is summertime!";
    }
 }
 echo season($tem);
 ?>
</body>
</html>
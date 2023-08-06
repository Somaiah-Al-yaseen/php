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
 <input type="text" name="name">
 <h2>Please input your age</h2>
 <input type="text" name="age">
 <input type="submit" value="Submit ">
 </form>

 <?php
 
 $name = $_POST['name'];
 $age = $_POST['age'];
 function check_vote($name,$age) //function has been declared
 {
     if ($age >= 18) {
         echo $name . ", you Are Eligible For Vote";
     } else {
         echo $name . ", you are not eligible for vote. ";
     }
 }
 echo check_vote($name,$age);
 ?>
</body>
</html>
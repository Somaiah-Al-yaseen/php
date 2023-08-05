<?php
if($_SERVER["REQUEST_METHOD"]=== "POST")  {
    // ECho $_POST["username"] ;
    // echo "<br>" ;
    // echo $_POST["lang"] ;
    if($_POST["lang"] == "ar"){
header("location: text.txt") ;
exit() ;
 }
 elseif($_POST["lang"] == "en"){
header("location: TEST_constant.php");
exit() ;
 }
 else {
 header("location: test_include2.php");
 exit() ;
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>example</title>
</head>
<body>
    <form action="" method="post">
<input type="text"  name="username">
<select name="lang">
<option value="ar">Arabic</option>
<option value="en">english</option>
<option value="es">spanish</option>
</select>
<input type="submit" value="go">
    </form>
</body>
</html>
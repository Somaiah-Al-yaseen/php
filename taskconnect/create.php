
 
 
 
 <form action="" method="POST">
<input type="text" name="username">
<input type="text" name="userage">
<input type="text" name="useremail">
<input type="submit" value="send">

</form>



<?php 
require("connect.php");
$user=$_POST["username"];
$userAge=$_POST["userage"];
$userEmail=$_POST["useremail"];
$sql = "INSERT INTO users (users_name, users_age, users_email)
VALUES ('$user', '$userAge', '$userEmail')";

if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
  
  $connect->close();




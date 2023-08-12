<?php
session_start() ;
include('dbcon.php');

if(isset($_POST["Save_Employee_Btn"]))
{
$Users_Name = $_POST['Users_Name'] ;
$Users_Address = $_POST['Users_Address'] ;
$Users_Salary = $_POST['Users_Salary'] ;

$query ="INSERT INTO employees (Users_Name,Users_Address,Users_Salary) VALUES ( :Users_Name, :Users_Address, :Users_Salary) ";
$query_run = $conn->prepare($query) ;

$data = [
    ':Users_Name' => $Users_Name ,
    ':Users_Address' => $Users_Address ,
    ':Users_Salary' => $Users_Salary ,
] ;
$query_execute = $query_run->execute($data);
if($query_execute){
$_SESSION['message'] ="Inserted Successfully";
header("location: index.php") ;
exit(0) ;
}
else{
    $_SESSION['message'] ="Not Inserted";
    header("location: index.php") ;
    exit(0) ;
}
} ;



?>
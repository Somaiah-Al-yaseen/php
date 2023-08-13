<?php
session_start() ;
include('dbcon.php');

//we add this for editing
if(isset($_POST['delete-employee'])) {
    $employee_id = $_POST['delete-employee'] ;

    try {
        $query = "DELETE FROM employees WHERE id=:emplo_id" ;
        $stm = $conn->prepare($query);


        $query_execute =  $stm->execute([':emplo_id' =>$employee_id ]) ;    //or $query_execute =  $stm->execute($data) ;

        if($query_execute){

            $_SESSION['message'] ="Deleted Successfully";
            header("location: index.php") ;
            exit(0) ;
            }
            else{
                $_SESSION['message'] ="Not Deleted";
                header("location: index.php") ;
                exit(0) ;
            }



    } catch (PDOException $e ){
        echo $e->getMessage()  ;
      }

}



//we add this for editing
if (isset($_POST["Update_Employee_Btn"])){


    $employee_id = $_POST['employee_id'] ;
    $Users_Name = $_POST['Users_Name'] ;
    $Users_Address = $_POST['Users_Address'] ;
    $Users_Salary = $_POST['Users_Salary'] ;

    try {
        $query = "UPDATE employees SET Users_Name=:Users_Name, Users_Address=:Users_Address ,Users_Salary=:Users_Salary WHERE id=:employ_id LIMIT 1" ;
        $stm = $conn->prepare($query);



        $data = [
            ':Users_Name' => $Users_Name ,
            ':Users_Address' => $Users_Address ,
            ':Users_Salary' => $Users_Salary ,
            ':employ_id' => $employee_id 
        ] ;
        $query_execute =  $stm->execute($data) ;


        if($query_execute){

            $_SESSION['message'] ="Updated Successfully";
            header("location: index.php") ;
            exit(0) ;
            }
            else{
                $_SESSION['message'] ="Not Updated";
                header("location: index.php") ;
                exit(0) ;
            }

    } catch (PDOException $e ){
      echo $e->getMessage()  ;
    }
} 



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
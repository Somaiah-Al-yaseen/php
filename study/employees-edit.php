<?php
require("dbcon.php") ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data into database using PHP PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-md-8 mt-4 ms-5">
                <div class="card">
                   <div class="card-header">
                   <h3>Edit And Update data into database using PHP PDO
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                   </h3>
                   </div>
                   <div class="card-body">
                    <?php
                      if(isset($_GET['id'])) {
                           $employee_id = $_GET['id'] ;
                           $query = "SELECT * FROM employees WHERE id=:emplo_id  LIMIT 1" ;
                           $stm = $conn->prepare($query);
                           $data = [
                            ':emplo_id' => $employee_id 
                           ] ;
                            $stm->execute($data) ;

                            $result = $stm->fetch(PDO::FETCH_OBJ) ;

                      }
                    ?>
                   <form action="code.php"  method="post">

                         <input type="hidden" name="employee_id" value="<?= $result->id  ?>">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="Users_Name" value="<?= $result->Users_Name  ?>"  class="form-control">  
                            </div>
                            <div class="mb-3">
                                <label>Adress</label>
                                <input type="text" name="Users_Address" value="<?= $result->Users_Address  ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Salary</label>
                                <input type="text" name="Users_Salary" value="<?= $result->Users_Salary  ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                               <button type="submit" name="Update_Employee_Btn" class="btn btn-primary" >Update Employee</button>
                            </div>

                        </form>
                   </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
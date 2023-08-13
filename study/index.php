<?php session_start() ;
include("dbcon.php") ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-md-12 mt-4">


           <?php if (isset($_SESSION['message'])) :   ?>
           <h5 class="alert alert-success"><?= $_SESSION['message']  ?> </h5>
           <?php 
           unset($_SESSION['message']);
           endif ;  ?>

                <div class="card">
                   <div class="card-header">
                   <h3>PDO CRUD
                      <a href="Employee_Add.php" class="btn btn-primary float-end">Add Employee</a>
                   </h3>
                   </div>   
                   <div class="card-body">
                       <table class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                      <th>ID</th>
                                      <th>Name</th>
                                      <th>Address</th>
                                      <th>Salary</th>
                                   </tr>
                               </thead>
                               <tbody>
                                <?php
                                $query = "SELECT * FROM employees" ;
                                $stm = $conn->prepare($query);
                                $stm->execute() ;

                                $result = $stm->fetchAll() ;
                                if ($result){
                                  foreach($result as $row){
                                    ?>
                                        <tr>
                                             <td><?= $row['id'];  ?></td>
                                             <td><?= $row['Users_Name'];  ?></td>
                                             <td><?= $row['Users_Address'];  ?></td>
                                             <td><?= $row['Users_Salary'];  ?></td>
                                        </tr>
                                    <?php
                                    
                                  }
                                } else{
                                    ?>
                                    <tr>
                                        <td colspan="4">No Record Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                               </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
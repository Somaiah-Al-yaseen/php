<?php session_start()  ; ?>
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
           <?php endif ;  ?>

                <div class="card">
                   <div class="card-header">
                   <h3>PDO CRUD
                      <a href="Employee_Add.php" class="btn btn-primary float-end">Add Employee</a>
                   </h3>
                   </div>   
                   <div class="card-body">
                       
                   </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
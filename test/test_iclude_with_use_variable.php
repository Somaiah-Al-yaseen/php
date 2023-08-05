<?php $user = "mohammad"   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page | <?php echo $user ?> </title>
</head>
<body>
    <h1>welcome home <?php echo $user ?></h1>
    <h2>your scoore is 1000  <?php echo $user ?></h2>

    <div> you are awesme <?php include("test_include2.php") ?>  </div>
</body>
</html>



<?php
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;


// $a = 10 ;

//error control operators   ///add @ to remove error sentence
//qdd die to print something and stop every thing belOW 
//$b = @$a   or   die("error");  



// file (read the file into array)
$f = file("text.txt") ;
ECho "<pre>" ;
print_r($f) ;
ECho "</pre>" ;


echo "<br>" ;
echo "<br>" ;
echo "<br>" ;


//include
include("test_include2.php") ;







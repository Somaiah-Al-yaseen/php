<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  
  // Starting clock time in seconds
  $start_time = microtime(true);
  $a=1;
    
  // Start loop
  for($i = 1; $i <=1000; $i++)
  {
      $a++;
  } 
    
  // End clock time in seconds
  $end_time = microtime(true);
    
  // Calculate script execution time
  $execution_time = ($end_time - $start_time);
    
  echo " Execution time of script = ".$execution_time." sec";
  ?>
</body>
</html>
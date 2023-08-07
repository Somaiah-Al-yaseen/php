<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $numbers = [2, 4, 7, 4, 8, 4];
    $unique_numbers = [];
    echo "<pre>";
    print_r(json_encode($numbers));
    echo "</pre>";

    
    foreach($numbers as $number)
    {
      if(!in_array($number,$unique_numbers)){
          $unique_numbers[] = $number;
      }
    }
    print(json_encode($unique_numbers)); 
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method='POST' id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>
       
	</div>

    <?php
   $result_str = $result = '';
   if (isset($_POST['unit-submit'])) {
       $units = $_POST['units'];
       if (!empty($units)) {
           $result = calculate_bill($units);
           $result_str = 'Total amount of ' . $units . ' = ' . $result;
       }
   }
  
   function calculate_bill($units) {
       $unit_cost_first = 2.50;
       $unit_cost_second = 5.00;
       $unit_cost_third = 6.20;
       $unit_cost_fourth = 7.50;
   
       if($units <= 50) {
           $bill = $units * $unit_cost_first;
       }
       else if($units > 50 && $units <= 100) {
           $temp = 50 * $unit_cost_first;
           $remaining_units = $units - 50;
           $bill = $temp + ($remaining_units * $unit_cost_second);
       }
       else if($units > 100 && $units <= 250) {
           $temp = (50 * 3.5) + (100 * $unit_cost_second);
           $remaining_units = $units - 150;
           $bill = $temp + ($remaining_units * $unit_cost_third);
       }
       else {
           $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
           $remaining_units = $units - 250;
           $bill = $temp + ($remaining_units * $unit_cost_fourth);
       }
       return number_format((float)$bill, 2, '.', '');
   }

 echo calculate_bill($units);

?>
 <!-- <div>
		    <?php 
            echo '<br />' . $result_str; 
            ?>
		</div> -->
</body>
</html>
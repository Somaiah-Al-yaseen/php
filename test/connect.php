

<?php

$connect = new mysqli("localhost" ,"root" ,"", "test1") ; //4value:servername ,username,password,dadtabasename

$statment = $connect->prepare(" select * from users") ;

$statment->execute() ;


// $result = $statment->get_result() ;
// while($row = $result->fetch_assoc()) {
//     echo $row["users_name"] ;
// }


$result = $statment->get_result() ;
echo "<table border='1'>" ;
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["users_name"] ."</td>"."<td>" . $row["users_addres"] ."</td>" ."</tr>"  ;
}
echo "</table>" ;

?>
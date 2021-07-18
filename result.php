<?php 
$con = mysqli_connect("localhost" , "root" , "" , "lottery") OR die($mysqli_error($con)) ;

$select_query = "SELECT Tic_Id, Name FROM users_ticket WHERE Status = 'Confirmed' ORDER BY RAND() LIMIT 1  " ;
$select_result = mysqli_query($con , $select_query) ;
$row = mysqli_fetch_array($select_result) ; 
echo $row['Tic_Id'] ;
echo $row['Name'] ;


?>

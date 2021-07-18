<?php

$con = mysqli_connect ("localhost", "root", "", "lottery") OR die(mysqli_error($con));
session_start() ;
$user_id = $_SESSION['Id'];

$select_query = "SELECT Name FROM users WHERE Id = $user_id" ;
$select_result = mysqli_query($con, $select_query) OR die(mysqli_error($con));
$row = mysqli_fetch_array ($select_result);
$Name = $row['Name'];

$insert_query = "INSERT INTO users_ticket (user_id , Name , Status ) VALUES ('$user_id' , '$Name' , 'Confirmed' )";
mysqli_query($con , $insert_query) OR die(mysqli_error($con)) ; 

$select_query = "SELECT * FROM users_ticket where User_Id = $user_id ";
$select_result = mysqli_query($con , $select_query) ; 
$count = mysqli_num_rows($select_result);

echo $count ; 

if ($count===3)
{
$update_query = "UPDATE users_ticket set Status = 'Disqualified' WHERE User_Id = $user_id" ;
mysqli_query($con, $update_query) OR die(mysqli_error($con)) ;
}
else if ($count===4) 
{
$insert_query = "INSERT INTO users_ticket (user_id , Name , Status ) VALUES ('$user_id' , '$Name' , 'Confirmed' )";
mysqli_query($con , $insert_query) OR die(mysqli_error($con)) ; 
}
 
echo "Ticket Successfully Purchased" ?> <a href="login.php"><?php echo "Click here to login again and Continue";?> </a>  
<?php echo "To view Result go to" ?> <a href = "result.php"><?php echo "View Result here" ; ?> </a>

<?php 
session_unset() ; 
session_destroy() ; 
?> 



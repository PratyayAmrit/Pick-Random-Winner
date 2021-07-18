<?php
$con = mysqli_connect ("localhost", "root", "", "lottery") OR die(mysqli_error($con));
session_start();
$Name = mysqli_real_escape_string($con, $_POST['Name']);
$Email = mysqli_real_escape_string($con, $_POST['Email']);
$Password = mysqli_real_escape_string($con, $_POST['Password']);
$Contact = $_POST['Contact'];
$City = mysqli_real_escape_string($con, $_POST['City']);
$Address = mysqli_real_escape_string($con, $_POST['Address']);

$user_registration_query = "INSERT INTO users(Name, Email, Password, Contact, City, Address) VALUES ('$Name', '$Email', '$Password', '$Contact', '$City', '$Address')" ;
$user_registration_submit = mysqli_query ($con, $user_registration_query) OR die (mysqli_error($con)) ;

echo "User Successfully Submited";?><a href="login.php"><?php echo "Click here to LOGIN";?> </a> 
<?php 
$_SESSION['Email'] = $Email ;
$_SESSION['Id'] = mysqli_insert_id($con);
?>
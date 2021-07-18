<?php

$con = mysqli_connect ("localhost", "root", "", "lottery") OR die(mysqli_error($con));
session_start();
$Email = $_POST['Email'];
$regex_Email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_Email, $Email)) {
  header('location: index.php?Email_error=enter correct email');
}
$Password = $_POST['Password'];

$Email = mysqli_real_escape_string($con, $Email);
$Password = mysqli_real_escape_string($con, $Password);
$select_query = "SELECT Id, Email, Password FROM users" ;
$select_query_result = mysqli_query($con, $select_query) or die (mysqli_error($con)) ; 
while ($row = mysqli_fetch_array($select_query_result))
{
if ($row['Email'] == $Email && $row['Password'] == $Password) 
{
$_SESSION['Email'] = $Email ; 
$_SESSION['Id'] = $row['Id'] ;
header('location:home.php');
break;
}
else { 
echo "Email Password did not match" ;
}
}
 
?>
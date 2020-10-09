<?php
/** database connection **/
require ("function.php");
$con = dbConnect();

/*
session_start();
//echo "Hello ".$_SESSION["user_name"];

if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	//echo "you are not loged in";
	header ("Location: login.php");	
}*/

/** getting form data from user **/
//print_r($_REQUEST);
$firstName = $_POST['firstName'];
$userRole = $_POST['userRole'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$emailAddress = $_POST['emailAddress'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$postalCode = $_POST['postalCode'];
//echo $add_name;
//var_dump($add_phn);


$add_sql = "INSERT INTO employee_register (firstName, userRole, username, password, gender, designation, emailAddress, phoneNumber,address, postalCode) VALUES('$firstName', '$userRole', '$username', '$password', '$gender', '$designation', '$emailAddress', '$phoneNumber', '$address', '$postalCode')";
//var_dump($read_sql);
//$add_sql = "INSERT INTO xyz (First Name, Last Name) VALUES ('$first_name', '$last_name')";


$add_data = $con->query($add_sql);
//echo "<pre>";
//var_dump($add_data);
//header("Location:dashboard.php");

?>


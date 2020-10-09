<?php

//echo "edit action";

require ("function.php");
session_start();
$connect = dbConnect();
auth();

//var_dump($_REQUEST);

$id = $_REQUEST['id'];
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$userRole = $_REQUEST['userRole'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$designation = $_REQUEST['designation'];
$emailAddress = $_REQUEST['emailAddress'];
$phoneNumber = $_REQUEST['phoneNumber'];
$address = $_REQUEST['address'];
$postalCode = $_REQUEST['postalCode'];
//echo $id;
 //$firstName;

$edit_sql= "UPDATE `admin_register` SET `firstName` = '$firstName',`lastName` = '$lastName',`userRole`='$userRole',`username`='$username',`password`='$password',`gender`='$gender',`designation`='$designation',`emailAddress`='$emailAddress',`phoneNumber`='$phoneNumber',
   `address`='$address',`postalCode`='$postalCode'  WHERE `admin_register`.`id` = '$id'";
//"UPDATE `booking` SET `date` = '$date', `no_of_ticket` = '$seats' WHERE `booking`.`book_id` = $id";
var_dump($edit_sql);

$edit_query = $connect->query($edit_sql);
var_dump($edit_query);

header("Location:dashboard.php");
?>

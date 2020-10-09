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
$eid = $_POST['eid'];
$salaryMonth = $_POST['salaryMonth'];
$BasicPay = $_POST['BasicPay'];
$hra = $_POST['hra'];
$mediclaim = $_POST['mediclaim'];
$travelallowance = $_POST['travelallowance'];
$conallowance = $_POST['conallowance'];
$reimbursement = $_POST['reimbursement'];
$others = $_POST['others'];
//echo $add_name;
//var_dump($add_phn);


$add_sql = "INSERT INTO salary_register (eid, salaryMonth, BasicPay, hra, mediclaim, travelallowance, conallowance, reimbursement, others) VALUES('$eid', '$salaryMonth', '$BasicPay', '$hra', '$mediclaim', '$travelallowance', '$conallowance', '$reimbursement', '$others')";
//var_dump($read_sql);
//$add_sql = "INSERT INTO xyz (First Name, Last Name) VALUES ('$first_name', '$last_name')";


$add_data = $con->query($add_sql);
//echo "<pre>";
//var_dump($add_data);
header("Location:dashboard.php");

?>


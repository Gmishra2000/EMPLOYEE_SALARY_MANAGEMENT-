<?php
session_start();
//echo "Hello ".$_SESSION["user_name"];

if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	//echo "Hello ".$_SESSION["user_name"];
} else {
	//echo "you are not loged in";
	header ("Location: login.php");	
}
/** getting id for deleting the record from user **/
$id = $_REQUEST['id'];
//echo $id;

/** database connection **/
require ("function.php");
$con = dbConnect();

$del_sql = "DELETE FROM admin_register WHERE admin_register.id = '$id'";
//var_dump($del_sql);

$del_data = $con->query($del_sql);
//var_dump($del_data);

header("Location:dashboard.php");

?>

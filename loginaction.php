<?php

$username = $_POST['username'];
$password = $_POST['password'];


require ("function.php");
$con = dbConnect();


//mysql_connect("localhost","root","","esd");
//mysql_select_db("esd");


$result = mysqli_query($con,"Select * from admin where username = '$username' and password='$password'")
			or die("Failed to query database".mysqli_error());

$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
		//echo "welcome".$row['username'];
		
		session_start();
		//print_r($_SESSION);
		$_SESSION['user_name'] = $row['username'];
		
		//print_r($_SESSION['user_name']);
		//echo "Hello ". $_SESSION['user_name'];
		header ("Location: dashboard.php");

}else{
	header ("Location: login.php?msg=Username or password is incorrect");
	echo "failed to login";
	
}

?>

<?php

function dbConnect() {
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$db = "project";
	//$con = mysqli_connect("$servername", "$username", "$password", "$db");
	$con = mysqli_connect("localhost", "root", "", "esd");
	if($con->connect_error){
		echo "connection failed". mysqli_connect_error();
	} else {
		 //echo "connected";
		return $con;
	}
	
}

function auth(){
	
	if(!isset($_SESSION["user_name"])){
		header("Location: login.php");
	}
}

?>

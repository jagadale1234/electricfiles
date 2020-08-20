<?php
session_start();
include 'dbh.inc1.php';
if(isset($_POST['submit'])){

	$user = "SELECT * FROM dailyupdates";
	$query = mysqli_query($con , $user);
	$count = mysqli_num_rows($query);
	if($count){
		$username = mysqli_fetch_assoc($query);
		$_SESSION['units'] = $_username['Units'];
		$_SESSION['date'] = $_username['Date'];
		$_SESSION['monthly'] = $_username['Monthly'];
	}else{
		echo "You are a new user";
	}
	
}

?>
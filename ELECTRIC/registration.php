<?php
include 'dbh.inc.php';

if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($con , $_POST['user']);
	$password = mysqli_real_escape_string($con , $_POST['password']);
	$mobile = mysqli_real_escape_string($con , $_POST['phone']);
	$amount = mysqli_real_escape_string($con , $_POST['amount']);

	$sql = "SELECT * FROM signin where Username = '$username'";
	$query = mysqli_query($con ,$sql);

	$count = mysqli_num_rows($query);
	if($count > 0){
		echo "Already exists";
	}
	else{
		$insertquery = "insert into signin(Username,Password,Mobile,Amount) values('$username','$password','$mobile','$amount')";
		$iquery = mysqli_query($con , $insertquery);
		header("location:index.php");
	}
}


?>
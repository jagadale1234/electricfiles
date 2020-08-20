<?php
	session_start();
	include 'dbh.inc.php';
	if(isset($_POST['submit'])){
		$name = $_POST['user'];
		$password = $_POST['password'];

		$usersearch = "SELECT * FROM signin WHERE username = '$name' ";
		$query = mysqli_query($con ,$usersearch );

		$count = mysqli_num_rows($query);
		if($count){
			$username = mysqli_fetch_assoc($query);

			$dbpass = $username['Password'];
			$_SESSION['user'] = $username['Username'];
			$_SESSION['cost'] = $username['Amount'];
			$_SESSION['phone'] = $username['Mobile'];
			if($dbpass === $password){
				
				header('location:graph.php');
			}
			else{
				
				header('location:index.php');
			}
		}else{
			echo "Invalid Email";
		}
	}

?>
<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "session";

$con = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if($con){
	?>
		
	<?php
}else{
	?>
		<script type="text/javascript">alert("No Connection")</script>
	<?php
}
?>
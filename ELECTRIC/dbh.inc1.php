<?php
$serverame = "localhost"
$dBUsername = "root";
$dBPassword = "";
$dBName = "daily";

$con = mysqli_connect($serverame ,$dBUsername,$dBPassword,$dBName);

if($con){
	?>
		
	<?php
}else{
	?>
		<script type="text/javascript">alert("No Connection")</script>
	<?php
}
?>
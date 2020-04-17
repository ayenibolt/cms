<?php 
require_once("includes/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// echo("$email is a valid email address");
		$result =mysqli_query($con,"SELECT userEmail FROM users WHERE userEmail='$email'");
		$count=mysqli_num_rows($result);
		if($count>0){
			echo "<span style='color:red'> Email already exists .</span>";
			echo "<script>$('#submit').prop('disabled',true);</script>";
		} else {
			echo "<span style='color:green'> Email available for Registration .</span>";
			//  echo "<script>$('#submit').prop('disabled',false);</script>";
		}
	  } else {
		  // echo("$email is not a valid email address");
		  echo "<span style='color:red'> $email is not a valid email address .</span>";
		  echo "<script>$('#submit').prop('disabled',true);</script>";
		}
	}
?>

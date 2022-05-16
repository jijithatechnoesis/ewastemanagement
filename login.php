<?php
	$conn=mysqli_connect('localhost','root', '','ewaste');

	session_start();
		if($_POST['type']==2){

		$email=$_POST['email'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from crud where email='$email' and password='$password'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>
  

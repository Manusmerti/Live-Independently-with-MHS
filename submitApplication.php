<?php

	session_start();
	header('location:submitApplicationForm.php');

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'mhs_dbs');
	
	if(isset($_POST['save'])){
		$applicationDate = $_POST['applicationDate'];
		$requiredMonth = $_POST['requiredMonth'];
		$required_Year = $_POST['requiredYear'];
		$status = $_POST['status'];
		$email = $_POST['email'];
		$residence_ID = $_POST['residenceID'];
		$officerID = $_POST['officerID'];
		
		mysqli_query($con, "INSERT INTO application_dbs VALUES ('','$applicationDate','$requiredMonth','$requiredYear','$status','$email','$residenceID','$officerID')") or die(mysqli_error($con));
	}

?>
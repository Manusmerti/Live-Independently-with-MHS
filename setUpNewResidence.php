<?php

	session_start();
	header('location:setUpNewResidenceForm.php');

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'mhs_dbs');
	
	if(isset($_POST['save'])){
		$address = $_POST['address'];
		$unitsNum = $_POST['unitsNum'];
		$unitSize = $_POST['unitSize'];
		$monthlyRental = $_POST['monthlyRental'];
		$officerID = $_POST['officerID'];
		
		mysqli_query($con, "INSERT INTO setupnewresidence VALUES ('','$address','$unitsNum','$unitSize','$monthlyRental','$officerID')") or die(mysqli_error($con));
	}

?>
<?php

session_start();
//header('location:viewResidencesForm.php');

$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, 'mhs_dbs');

if(mysqli_connect_errno()){
	echo "connection failed : " . mysqli_connect_errno();
}

?>
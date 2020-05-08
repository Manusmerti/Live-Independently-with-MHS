<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "mhs_dbs";
	var $connected;

	function __construct(){
		$this->connected = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($username,$password,$fullname)
	{	
		$insert = mysqli_query($this->connected,"insert into user values ('','$username','$password','$fullname')");
		return $insert;
	}

	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->connected,"select * from user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('fullname', $data_user['fullname'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['fullname'] = $data_user['fullname'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->connected,"select * from user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['fullname'] = $data_user['fullname'];
		$_SESSION['is_login'] = TRUE;
	}
} 


?>
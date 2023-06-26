<?php 
session_start(); 
include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: Log-on_index.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: Log-on_index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM receptionists WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: Appointment_Index.php");
		        exit();
            }else{
				header("Location: Log-on_index.php?error=Incorect email or password");
		        exit();
			}
		}else{
			header("Location: Log-on_index.php?error=Incorect email or password");
	        exit();
		}
	}
	
}else{
	header("Location: Appointment_Index.php");
	exit();
}
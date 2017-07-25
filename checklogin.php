<?php
session_start(); //To use session
require_once('connect.php');

$user = $_POST['uname'];
$pass = $_POST['psw'];
$re_user=$user;
$re_pass=hash('sha256',$pass);

$q = "SELECT * FROM login WHERE username = '$re_user' AND password = '$re_pass' ";

//echo $q;

$result = $conn->query($q);
if($result){
	$count_no_row = $result->num_rows;
	if($count_no_row == 1){
		$row = $result->fetch_array();
		$_SESSION['admin_id'] = $row['username']; //Keep Data to Session
		$_SESSION['admin_pass'] = $row['password']; //Keep Data to Session
		$_SESSION['LAST_ACTIVITY'] = time();

		echo "Login Success.".'<a href="adminmenu.php"><br>Go to Admin Page</a>';

		header('Location: adminmenu.php');

	}else{
		echo "Wrong Username or Password".'<a href="page.php"><br>Go to Main Page</a>';
	}
}else{
	die('Error: '.$q." ". $conn->error );
}
?>

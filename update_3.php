<?php
  session_start();
  require_once('connect.php');

  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
    session_unset();
    session_destroy();
    header("Location: adminmenu.php");
    exit;
  }

  $_SESSION['LAST_ACTIVITY'] = time();


	$id = $_POST['id'];
	$question = $_POST["quest"];
	$answer = $_POST["ans"];
	$enable = $_POST["enable"];

	$q = "UPDATE info3 SET question='$question',
	answer='$answer'
	WHERE id=$id";

	if(!$conn->query($q)){
		echo "Update failed: ". $mysqli->error;
	}else{
		header("Location: adminmenu.php");
	}
?>

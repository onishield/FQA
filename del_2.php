<?php session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
	session_unset();
	session_destroy();
	header("Location: adminmenu.php");
	exit;
}

$_SESSION['LAST_ACTIVITY'] = time();

if(isset($_SESSION['admin_id'])||isset($_SESSION['admin_pass'])){

	$id = $_GET['qid'];
	require_once('connect.php');
	if(isset($id)) {
		$q="DELETE FROM info2 WHERE id=$id";
		$q = strtolower($q);
			if(!$conn->query($q)){
				echo "DELETE failed. Error: ".$conn->error ;
		   }
		   $conn->close();
		   header("Location: adminmenu.php");
	}
}else{
	echo "You not have permission to access";
}

?>

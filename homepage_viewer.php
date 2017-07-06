<!DOCTYPE html>
<html>
<head>
	<title>FQA CAT</title>
</head>
<body>
<?php
$sql = "Select question,answer From info"
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
 ?>

</body>
</html>

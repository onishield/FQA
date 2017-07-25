<?php session_start();
require_once('connect.php');

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
	  session_unset();
    session_destroy();
}

$_SESSION['LAST_ACTIVITY'] = time();

?>

<!DOCTYPE html>

<html>
	<head>
		<style>
			tr:nth-child(odd) {background-color: #ffd994}
			tr:nth-child(even) {background-color: #ffdfa6}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>FQA</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/loginmodel.css">
	</head>
	<body>
		<div id="wrapper">
			<header class="header-site">
        <?php
  		  if(isset($_SESSION['admin_id'])||isset($_SESSION['admin_pass'])){
  		  ?>
				<nav class="navbar navbar-inverse navbar-fixed-top" style="z-index: 1;">

					<div class="container">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>

							</button>
							<a class="navbar-brand" href="page.php"><img src="Logo.png" width=100px height=30px;></a>
						</div><!-- navbar-header -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">

								<a href="page.php"><button class="button button1" style="width:auto;">Logout</button></a>

							</ul>
						</div>
					</div><!-- container -->
				</nav>
        <?php
        }else{
        ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="z-index: 1;">

					<div class="container">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>

							</button>
							<a class="navbar-brand" href="page.php"><img src="Logo.png" width=100px height=30px;></a>
						</div><!-- navbar-header -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">

								<button class="button button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

								<div id="id01" class="modal">

									<form method="post" class="modal-content animate" action="checklogin.php">

										<div class="container">
											<label><b>Username</b></label>
											<input type="text" placeholder="Enter Username" name="uname" required>

											<label><b>Password</b></label>
											<input type="password" placeholder="Enter Password" name="psw" required>

											<button type="submit">Login</button>
										</div>
									</form>
								</div>

								<script>
								// Get the modal
								var modal = document.getElementById('id01');

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
									if (event.target == modal) {
										modal.style.display = "none";
									}
								}
								</script>
							</ul>
						</div>
					</div><!-- container -->
				</nav>
        <?php
        }
        ?>
			</header>
		</div>

    <div class="panel-body" style="margin-top:120px;">
      <?php
		  if(isset($_SESSION['admin_id'])||isset($_SESSION['admin_pass'])){
		  ?>

      <table class="table display" >
        <thead>
					<tr>
						<td class="active" style="text-align: left; font-size: 30px;" colspan="6"> <strong>FAQ Management</strong> </td>
					</tr>
					<tr>
						<td class="active" style="text-align: center; background-color: #ffaa00; color: #444444;#;" colspan="6"><b>AAA QUESTION</b></td>
					</tr>
					<tr>
						<th style="width:5%;">No.</th>
						<th style="width:40%;">Question</th>
						<th colspan="2" style="width:45%;">Answer</th>
            <!--<th style="width:5%;">Show</th>-->
            <th style="width:5%;">Edit</th>
            <th style="width:5%;">Delete</th>
					</tr>
				</thead>
        <div id="result">
          <?php
          $sql = "SELECT * FROM info";
          $result = mysqli_query($conn, $sql);
          ?>
          <tbody id="myTable">
            <?php
            if(mysqli_num_rows($result) == 0){
              ?>
              <tr>
                <td class="active" style="text-align: center;" colspan="6">
                  <strong>Don't have Data </strong>
                </td>
              </tr>
              <?php
              }
              $i = 0;
              while($row = $result->fetch_array()){
              ?>
              <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $row['question']; ?></td>
                <td colspan="2" ><?php echo nl2br($row['answer']); ?></td>
                <!--<td><input type='checkbox' <?php //if ($row['enable'])	 echo "CHECKED"; echo " disabled"; ?>></td>-->

                <!--<td><a onclick="document.getElementById('id09').style.display='block'"><img src="edit.png" width="24" height="24"></a></td>
								-->
								<td><a href='adminmenu_edit_1.php?qid=<?=$row['id']?>'><img src="edit.png" width="24" height="24"></a></td>

                <td><a href='del_1.php?qid=<?=$row['id']?>'> <img src="delete.png" width="24" height="24"></a></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </div>
<!-------------------------------------------------------------------------------------------------------------->
					<thead>
						<tr>
							<td class="active" style="text-align: center; background-color: #ffaa00; color: #444444;#;" colspan="6"><b>TOOLS IN AAA SYSTEM</b></td>
						</tr>
						<tr>
							<th style="width:5%;">No.</th>
							<th style="width:40%;">Question</th>
							<th colspan="2" style="width:45%;">Answer</th>
	            <!--<th style="width:5%;">Show</th>-->
	            <th style="width:5%;">Edit</th>
	            <th style="width:5%;">Delete</th>
						</tr>
					</thead>
	        <div id="result">
	          <?php
	          $sql2 = "SELECT * FROM info2";
	          $result2 = mysqli_query($conn, $sql2);
	          ?>
	          <tbody id="myTable">
	            <?php
	            if(mysqli_num_rows($result2) == 0){
	              ?>
	              <tr>
	                <td class="active" style="text-align: center;" colspan="6">
	                  <strong>Don't have Data </strong>
	                </td>
	              </tr>
	              <?php
	              }
	              $i = 0;
	              while($row2 = $result2->fetch_array()){
	              ?>
	              <tr>
	                <td><?php echo ++$i; ?></td>
	                <td><?php echo $row2['question']; ?></td>
	                <td colspan="2" ><?php echo nl2br($row2['answer']); ?></td>
	                <!--<td><input type='checkbox' <?php //if ($row['enable'])	 echo "CHECKED"; echo " disabled"; ?>></td>-->

	                <!--<td><a onclick="document.getElementById('id09').style.display='block'"><img src="edit.png" width="24" height="24"></a></td>
									-->
									<td><a href='adminmenu_edit_2.php?qid=<?=$row2['id']?>'><img src="edit.png" width="24" height="24"></a></td>

	                <td><a href='del_2.php?qid=<?=$row2['id']?>'> <img src="delete.png" width="24" height="24"></a></td>
	              </tr>
	              <?php
	              }
	              ?>
	            </tbody>
	          </div>
<!-------------------------------------------------------------------------------------------------------------->
						<thead>
							<tr>
								<td class="active" style="text-align: center; background-color: #ffaa00; color: #444444;#;" colspan="6"><b>GENERAL QUESTIONS</b></td>
							</tr>
							<tr>
								<th style="width:5%;">No.</th>
								<th style="width:40%;">Question</th>
								<th colspan="2" style="width:45%;">Answer</th>
								<!--<th style="width:5%;">Show</th>-->
								<th style="width:5%;">Edit</th>
								<th style="width:5%;">Delete</th>
							</tr>
						</thead>
						<div id="result">
							<?php
							$sql3 = "SELECT * FROM info3";
							$result3 = mysqli_query($conn, $sql3);
							?>
							<tbody id="myTable">
								<?php
								if(mysqli_num_rows($result3) == 0){
									?>
									<tr>
										<td class="active" style="text-align: center;" colspan="6">
											<strong>Don't have Data </strong>
										</td>
									</tr>
									<?php
									}
									$i = 0;
									while($row3 = $result3->fetch_array()){
									?>
									<tr>
										<td><?php echo ++$i; ?></td>
										<td><?php echo $row3['question']; ?></td>
										<td colspan="2" ><?php echo nl2br($row3['answer']); ?></td>
										<!--<td><input type='checkbox' <?php //if ($row['enable'])	 echo "CHECKED"; echo " disabled"; ?>></td>-->

										<!--<td><a onclick="document.getElementById('id09').style.display='block'"><img src="edit.png" width="24" height="24"></a></td>
										-->
										<td><a href='adminmenu_edit_3.php?qid=<?=$row3['id']?>'><img src="edit.png" width="24" height="24"></a></td>

										<td><a href='del_3.php?qid=<?=$row3['id']?>'> <img src="delete.png" width="24" height="24"></a></td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</div>
							<thead>
								<tr>
									<td class="active" style="text-align: center;" colspan="6"> <strong>&nbsp</strong> </td>
								</tr>
							</thead>
<!-------------------------------------------------------------------------------------------------------------->
					<tbody>
						<td style="background-color: #ffffff; font-size: 30px;">&nbsp</td>
					</tbody>
					<thead>
						<tr>
							<td class="active" style="text-align: left; font-size: 30px;" colspan="6"> <strong>Additional Questions Management</strong> </td>
						</tr>
						<tr>
							<th style="width:5%;">No.</th>
							<th style="width:40%;">Question</th>
							<th style="width:40%;">Answer</th>
							<th style="width:5%;">Show</th>
							<th style="width:5%;">Edit</th>
							<th style="width:5%;">Delete</th>
						</tr>
					</thead>
					<div id="result">
						<?php
						$sql4 = "SELECT * FROM admin";
						$result4 = mysqli_query($conn, $sql4);
						?>
						<tbody id="myTable">
							<?php
							if(mysqli_num_rows($result4) == 0){
								?>
								<tr>
									<td class="active" style="text-align: center; background-color: #ffd994;" colspan="6">
										<strong style="color: #ff0000;">Don't have Data </strong>
									</td>
								</tr>
								<?php
								}
								$i = 0;
								while($row4 = $result4->fetch_array()){
								?>
								<tr>
									<td><?php echo ++$i; ?></td>
									<td><?php echo $row4['question']; ?></td>
									<td><?php echo nl2br($row4['answer']); ?></td>
									<td><input type='checkbox' <?php if ($row4['enable'])	 echo "CHECKED"; echo " disabled"; ?>></td>

									<!--<td><a onclick="document.getElementById('id09').style.display='block'"><img src="edit.png" width="24" height="24"></a></td>
									-->
									<td><a href='adminmenu_edit.php?qid=<?=$row4['id']?>'><img src="edit.png" width="24" height="24"></a></td>

									<td><a href='del.php?qid=<?=$row4['id']?>'> <img src="delete.png" width="24" height="24"></a></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</div>
						<thead>
							<tr>
								<td class="active" style="text-align: center;" colspan="6"> <strong>&nbsp</strong> </td>
							</tr>
						</thead>

        </table>
        <?php
        }else{
        ?>
        <strong style="font-size: 200%;align-content: center;margin-left: 32%;">You don't have permission to access</strong>
        <?php
        }
        ?>
      </div>

	      <div id="id09" class="modal_1">
	        <form method="post" class="modal_1-content animate" action="edit.php">
	          <div class="container">
	            <label><b>Qusetion</b></label>
	            <input type="text" placeholder="Enter Question" name="qust" readonly>
	            <label><b>Answer</b></label>
	            <input type="text" placeholder="Enter Answer" name="ans" required>
	            <label><b>Show</b></label>
	            &nbsp<input type='checkbox' <?php if ($row['enable'])	 echo "CHECKED";?>>
	            <button type="submit">Submit</button>
	          </div>
	        </form>
	      </div>

			<?php include "./footer.php" ?>

      <script>
      	var modal_1 = document.getElementById('id09');

      	// When the user clicks anywhere outside of the modal, close it
      	window.onclick = function(event) {
        	if (event.target == modal_1) {
          	modal_1.style.display = "none";
        	}
      	}

			}
      </script>
	</body>
</html>

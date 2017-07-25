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
						<td class="active" style="text-align: left;" colspan="6"> <strong>Question Management</strong> </td>
					</tr>
				</thead>
			</table>
        <div id="result">
          <?php
					$id = $_GET['qid'];
          $sql = "SELECT * FROM info3 WHERE id=$id";
          $result = mysqli_query($conn, $sql);
					if(!$result){
						echo "Select failed: ".$mysqli->error;
					}
					$row = $result->fetch_array();
          ?>

					<div id="id09" class="modal_edit">
		        <form method="post" class="modal_edit-content" action="update_3.php">
		          <div class="container">
		            <label><b>Qusetion</b></label>
		            <input type="text" placeholder="Enter Question" value="<?=$row['question']?>" name="quest" readonly>
		            <label><b>Answer</b></label>
								<textarea name="ans"> <?=$row['answer']?></textarea>

								<input type="hidden" name="id" value="<?=$id?>" >

		            <button type="submit">Submit</button>
		          </div>
		        </form>
		      </div>

          </div>

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
			function displayFunction(){

				document.getElementById('id09').style.display='block'
      	// Get the modal
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

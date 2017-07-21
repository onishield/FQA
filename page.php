<?php session_start(); session_destroy(); require_once('connect.php');?>

<!DOCTYPE html>

<html>
<<<<<<< HEAD
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
</head>

<body>
  <?php

=======
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
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
>>>>>>> a49d15f97abe5cb6a9f86fc6c08140b8dd145a1d

								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>

							</button>
							<a class="navbar-brand" href="page.php"><img src="Logo.png" width=100px height=30px;></a>
						</div><!-- navbar-header -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">

								<button class="button button1" onclick="AskFunction()"  style="width:auto;">Ask</button>
								<button class="button button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>


								<div id="id01" class="modal">

									<form method="post" class="modal-content animate" action="checklogin.php">

										<div class="container">
											<label><b>Username</b></label>
											<input type="text" placeholder="Enter Username" name="uname" required>

											<label><b>Password</b></label>
											<input type="password" placeholder="Enter Password" name="psw" required>

<<<<<<< HEAD
									<label><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>

									<button type="submit">Login</button>
									<input type="checkbox" checked="checked"> Remember me
								</div>

								<div class="container" style="background-color:#f1f1f1">
									<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
									<span class="psw">Forgot <a href="#">password?</a></span>
=======
											<button type="submit">Login</button>
										</div>
									</form>
>>>>>>> a49d15f97abe5cb6a9f86fc6c08140b8dd145a1d
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
			</header>
			<form class="form floating-labels">
				<fieldset>
					<div class="icon">
						<input class="search_text" type="text" name="search_text" placeholder="Search" onkeyup="myFunction()" id="myInput" required>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="panel-body">
			<table class="table display" id="myTable">
				<thead>
					<tr>
						<td class="active" style="text-align: center;" colspan="6"> <strong>AAA QUESTION</strong> </td>
					</tr>
					<tr>
						<th>No.</th>
						<th>Question</th>
						<th>Answer</th>
					</tr>
				</thead>
				<div id="result">
					<tbody>
						<?php
						$sql = "SELECT question,answer FROM info";
						$result = $conn->query($sql);
						if(mysqli_num_rows($result) == 0){
						?>
						<tr>
							<td class="active" style="text-align: center;" colspan="6">
								<strong>Don't have Data </strong>
							</td>
						</tr>
						<?php
						}
<<<<<<< HEAD
						</script>


					</ul>

				</div>
			</div><!-- container -->
		    </nav>

		</header>

		<form class="form floating-labels">
		<fieldset>


			<div class="icon">

				<input class="search_text" type="text" name="search_text" onkeyup="myFunction()" id="myInput" required>
		    </div>


		</fieldset>


	</form>
</div>

<div class="panel-body">
                <table class="table display" >
                    <thead>
												<tr>
													<td class="active" style="text-align: center;" colspan="6"> <strong>AAA QUESTION</strong> </td>
												</tr>
                        <tr>
                            <th>No.</th>
                            <th>Question</th>
														<th>Answer</th>

                          <!--   <th>คำตอบ</th> -->
                           <!--  <th>-----</th>
                            <th>-----</th>
                            <th>แก้ไขคำตอบ</th> -->
                        </tr>
                    </thead>
<div id="result">
                    <tbody id="myTable">

                       <!--  <tr>
                            <td class="active" style="text-align: center;" colspan="6">
                                <strong>Don't have Data</strong>
                            </td>
                        </tr> -->
                        <?php


										 	  $sql = "SELECT question,answer FROM info";

											 $result = $conn->query($sql);
                           if(mysqli_num_rows($result) == 0){
                         ?>
                          <tr>
                             <td class="active" style="text-align: center;" colspan="6">
                                     <strong>Don't have Data </strong>
                             </td>
                          </tr>
                         <?php
                           }
                           ?>
                           <?php
                           $i = 0;

                           while($row = $result->fetch_array()){
                           ?>
                             <tr>
                             <td><?php echo ++$i; ?></td>
                             <td><?php echo $row['question']; ?></td>
                           	 <td><?php echo  nl2br($row['answer']); ?></td>
														 <!--<td><?php echo hash('sha256', 'admin' ); ?></td>-->


                             </tr>
                           <?php
                                 }
                           ?>

                            </td>
                        </tr>

                    </tbody>
										<thead>
												<tr>
													<td class="active" style="text-align: center;" colspan="6"> <strong>TOOLS IN AAA SYSTEM</strong> </td>
												</tr>
                        <tr>
                            <th>No.</th>
                            <th>Question</th>
														<th>Answer</th>
                        </tr>
                    </thead>
										<?php
										  $sql2 = "SELECT question,answer FROM info2";
									  	$result2 = mysqli_query($conn, $sql2);
									  //	$row2 = mysqli_fetch_array($result2);
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
                           ?>
                           <?php
                           $i = 0;
                           while($row2 = $result2->fetch_array()){
                           ?>
                             <tr>
                             <td><?php echo ++$i; ?></td>
                             <td><?php echo $row2['question']; ?></td>
                           	 <td><?php echo  nl2br($row2['answer']); ?></td>

                             </tr>
                           <?php
                                 }
                           ?>

                            </td>
                        </tr>

                    </tbody>

										<thead>
												<tr>
													<td class="active" style="text-align: center;" colspan="6"> <strong>GENERAL QUESTIONS</strong> </td>
												</tr>
                        <tr>
                            <th>No.</th>
                            <th>Question</th>
														<th>Answer</th>
                        </tr>
                    </thead>

										<?php
										  $sql3 = "SELECT question,answer FROM info3";
									  	$result3 = mysqli_query($conn, $sql3);
									  //	$row2 = mysqli_fetch_array($result2);
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
                           ?>
                           <?php
                           $i = 0;
                           while($row3 = $result3->fetch_array()){
                           ?>
                             <tr>
                             <td><?php echo ++$i; ?></td>
                             <td><?php echo $row3['question']; ?></td>
                           	 <td><?php echo  nl2br($row3['answer']); ?></td>

                             </tr>
                           <?php
                                 }
                           ?>

                            </td>
                        </tr>

                    </tbody>
</div>
										<thead>
												<tr>
													<td class="active" style="text-align: center;" colspan="6"> <strong>&nbsp</strong> </td>
												</tr>

                    </thead>

                </table>
            </div>


						<script>

function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
=======
						$i = 0;
						while($row = $result->fetch_array()){
						?>
						<tr>
							<td><?php echo ++$i; ?></td>
							<td><?php echo $row['question']; ?></td>
							<td><?php echo  nl2br($row['answer']); ?></td>
							<!--<td><?php echo hash('sha256', 'admin' ); ?></td>-->
						</tr>
						<?php
						}
						?>
						<td style="background-color: #ffffff">
						</td>
					</tbody>
					<thead>
						<tr>
							<td class="active" style="text-align: center;" colspan="6"> <strong>TOOLS IN AAA SYSTEM</strong> </td>
						</tr>
						<tr>
							<th>No.</th>
							<th>Question</th>
							<th>Answer</th>
						</tr>
					</thead>
					<?php
					$sql2 = "SELECT question,answer FROM info2";
					$result2 = mysqli_query($conn, $sql2);
					?>
					<tbody >
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
						while($row2 = $result2->fetch_array()){
						?>
						<tr>
							<td><?php echo ++$i; ?></td>
							<td><?php echo $row2['question']; ?></td>
							<td><?php echo  nl2br($row2['answer']); ?></td>
						</tr>
						<?php
						}
						?>
						<td style="background-color: #ffffff">
						</td>
					</tbody>
				<thead>
					<tr>
						<td class="active" style="text-align: center;" colspan="6"> <strong>GENERAL QUESTIONS</strong> </td>
					</tr>
					<tr>
						<th>No.</th>
						<th>Question</th>
						<th>Answer</th>
					</tr>
				</thead>
				<?php
				$sql3 = "SELECT question,answer FROM info3";
				$result3 = mysqli_query($conn, $sql3);
				?>
				<tbody >
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
					while($row3 = $result3->fetch_array()){
					?>
						<tr>
							<td><?php echo ++$i; ?></td>
							<td><?php echo $row3['question']; ?></td>
							<td><?php echo  nl2br($row3['answer']); ?></td>
						</tr>
						<?php
						}
						?>
					</tbody>
					<thead>
						<tr>
							<td class="active" style="text-align: center;" colspan="6"> <strong>TOOLS IN AAA SYSTEM</strong> </td>
						</tr>
						<tr>
							<th>No.</th>
							<th>Question</th>
							<th>Answer</th>
						</tr>
					</thead>
					<?php
					$sql4 = "SELECT question,answer FROM admin";
					$result4 = mysqli_query($conn, $sql4);
					?>
					<tbody id="myTable">
						<?php
						if(mysqli_num_rows($result4) == 0){
						?>
						<tr>
							<td class="active" style="text-align: center;" colspan="6">
								<strong>Don't have Data </strong>
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
							<td><?php echo  nl2br($row4['answer']); ?></td>
						</tr>
						<?php
						}
						?>
						<td style="background-color: #ffffff">
						</td>
					</tbody>
				</div>
				<thead>
					<tr>
						<td class="active" style="text-align: center;" colspan="6"> <strong>&nbsp</strong> </td>
					</tr>
				</thead>
			</table>
<<<<<<< HEAD
		</div>
		<div class='footer'>
			<div id="wrapper">
				jldsfioldjkgldsfjghkdlskjf
			</div>
		</div>
=======
				</div>
>>>>>>> 4a85f615c4653cf0b948a7c38c33435e885bd003

		<script>
		function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
					if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}

		function AskFunction(){
			var txt;
    var ask = prompt("Please enter your question:");
    if (ask == null || ask == "") {
        txt = "User cancelled the prompt.";
    } else {
				alert("Thank you for your enquiry, we will get back to you soon.");
>>>>>>> a49d15f97abe5cb6a9f86fc6c08140b8dd145a1d
    }
    document.getElementById("demo").innerHTML = txt;
		}
		</script>

	</body>
</html>

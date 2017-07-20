<?PHP require_once ("connect.php"); ?>
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
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	 	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/loginmodel.css">
	</head>
<body>
  <?php


//  $row = mysqli_fetch_array($result);
   ?>
<div id="wrapper">
		<header class="header-site">
			<!-- <nav class="nav-site">
				<div class="container">
					<div class="logo">W-RESPONSIVE</div>
						<a href="#" class="toggle-nav">
							<i class="fa fa-bars"></i>
						</a>
					<ul class="menu-wrapper">
						<li><a href="#" class="menu-item active">Home</a></li>
						<li><a href="#" class="menu-item">Service</a></li>
						<li><a href="#" class="menu-item">Work</a></li>
						<li><a href="#" class="menu-item">Contact</a></li>
					</ul>
				</div>
			</nav> -->

			<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>

				    </button>
				<a class="navbar-brand"><img src="Logo.png" width=100px height=30px;></a>

				</div><!-- navbar-header -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">

						<!--<button class="button button1">Login</button>-->

						<button class="button button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

						<div id="id01" class="modal">

							<form class="modal-content animate" action="/action_page.php">


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

		</header>

		<form class="form floating-labels">
		<fieldset>


			<div class="icon">
				<input class="search_text" placeholder="Search" type="text" name="search_text" id="search_text" required>
		    </div>


		</fieldset>


	</form>
</div>

<div class="panel-body">
                <table class="table display">
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

                    <tbody>

                       <!--  <tr>
                            <td class="active" style="text-align: center;" colspan="6">
                                <strong>Don't have Data</strong>
                            </td>
                        </tr> -->
                        <?php
												if(isset($_POST["query"])){
                       $search = mysqli_real_escape_string($conn, $_POST["query"]);
                       $sql = "  SELECT * FROM info
                       WHERE question LIKE '%".$search."%'
                       OR answer LIKE '%".$search."%' ";
										 }else {
										 	  $sql = "SELECT question,answer FROM info";
										 }
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
													 <td style="background-color: #ffffff">
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
										<tbody>
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
													 	<td style="background-color: #ffffff">
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

										<tbody>
											<div id="result">
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
                        </tr>
</div>
                    </tbody>

										<thead>
												<tr>
													<td class="active" style="text-align: center;" colspan="6"> <strong>&nbsp</strong> </td>
												</tr>

                    </thead>

                </table>
            </div>

</body>
</html>



<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"page.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

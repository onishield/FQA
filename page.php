<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>FQA</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <?php
  $sql = "Select question,answer From info"
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);
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
				<a href="#" class="navbar-brand">FQA CAT</a>

				</div><!-- navbar-header -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<button class="button button1">Login</button>
					</ul>

				</div>
			</div><!-- container -->
		    </nav>

		</header>

		<form class="form floating-labels">
		<fieldset>


			<div class="icon">
				<label class="label" for="name">search</label>
				<input class="user" type="text" name="name" id="name" required>
		    </div>


		</fieldset>


	</form>
</div>

<div class="panel-body">
                <table class="table display">
                    <thead>
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
                           ($row = mysqli_fetch_array($result)){
                           ?>
                             <tr>
                             <td><?php echo ++$i; ?></td>
                             <td><?php echo $row['question']; ?></td>
                           <td><?php echo $row['answer']; ?></td>


                             </tr>
                           <?php
                                 }
                           ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><a href="#" class="active">What is Cisco</a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                               <!--  <a class="btn btn-primary" href="index.php?action=addOrEdit.employee&employeeId=<?php echo $row['employee_id']; ?>">แก้ไข</a>
                                <a class="btn btn-danger" onclick="javascript:deleteEmployee(<?php echo $row['employee_id']; ?>);">ลบ</a> -->
                            </td>
                        </tr> -->

                    </tbody>
                </table>
            </div>

</body>
</html>

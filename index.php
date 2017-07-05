<?php

    session_start();

    require('./config/connect-database.php');
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }
    if(!isset($_GET['action'])){
        $first_menu_access = $_SESSION['first_menu_access'];
        header("location: index.php?action=$first_menu_access");
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/DataTables/jquery.dataTables.css">
    <link rel="stylesheet" href="css/jqueryUI/jquery-ui.css">

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lumino.glyphs.js"></script>
    <script charset="utf8" src="js/DataTables/jquery.dataTables.min.js"></script>
    <script src="js/jqueryUI/jquery-ui.js"></script>
    <style>
      .col-width{
        width: 80px;
        text-align: center;
      }
    </style>
    <script>
        function logout(){
            if(confirm("ต้องการออกจากระบบใช่หรือไม่ ?")){
                window.location = 'logout.php';
            }
        }
        $(function(){
            $('table').addClass("display");
            $('table').DataTable({
                responsive: true,
            });
        });
    </script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>NMK </span>Shopping</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
                                            <li>
                                                <a href="#" onclick="javascript:logout();">
                                                    <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>
                                                    Logout
                                                </a>
                                            </li>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                    <div class="form-group">
                        <label>เข้าสู่ระบบด้วยสิทธิ์ <?php echo $_SESSION['role_name']; ?></label><br class="clearfix"/>
                        <svg class="glyph stroked empty message"><use xlink:href="#stroked-empty-message"/></svg>
                        <label>คุณ<?php echo $_SESSION['name']." ".$_SESSION['surname']; ?></label>
                    </div>
            </form>
            <ul class="nav menu">
                <?php
                    $action = $_GET['action'];
                    $role_id = $_SESSION['role_id'];
                    $sql =  "SELECT mt_menu.menu_id, mt_menu.menu_name, mt_menu.menu_action, mt_menu.menu_icon ".
                            "FROM tbl_user_menu_config user_menu ".
                            "    JOIN tbl_mt_menu_tab mt_menu ON user_menu.menu_id = mt_menu.menu_id ".
                            "WHERE user_menu.role_id = '$role_id' AND user_menu.status = 'A' AND mt_menu.status = 'A'";

                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                ?>
                    <li class='<?php echo ($action == $row['menu_action'])?'active':''; ?>'>
                        <a href="index.php?action=<?php echo $row['menu_action']; ?>">
                        <?php
                            $icon_class = '';
                            $icon = explode(" ", $row['menu_icon']);
                            foreach($icon as $icon_name){
                                $icon_class .= '-'.$icon_name;
                            }
                            ?>

                        <svg class="glyph stroked <?php echo $row['menu_icon']; ?>"><use xlink:href="#stroked<?php echo $icon_class; ?>"></use></svg><?php echo $row['menu_name']; ?>
                        </a>
                    </li>
                <?php

                    }

                ?>
            </ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <?php
                if(isset($_GET['action'])){
                    $action = $_GET['action'];
                    require("pages_action/$action/$action.php");
                    echo "<script src='pages_action/$action/$action.js'></script>";
                }
            ?>
	</div>	<!--/.main-->

	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
    </body>
</html>

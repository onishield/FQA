<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AAA FAQ Admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css?v=88888" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/blockUI/jquery.blockUI.js"></script>
    <script src="js/lumino.glyphs.js"></script>
    <script>
        function disableTimeout(fillTimes, disableFunction){
            setTimeout(function(){
                disableFunction();
            }, fillTimes*60*1000);
        }
        function disableLoginField(fillTimes){
            if(fillTimes > 2 && (fillTimes%2 == 1) ){
                $.blockUI({ message: '<img src="images/loading.gif" style="width:160px"/><br/><h3>คุณกรอกรหัสผิดจำนวน '+fillTimes+' ครั้ง</h3><h4>โปรดรอ '+fillTimes+' นาที</h4>' });
                disableTimeout(fillTimes, $.unblockUI);
            }
        }
    </script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
<?php
    session_start();
    $valid_login = true;
    require('./config/connect-database.php');

    if(isset($_SESSION['username'])){
        header("location: index.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $_SESSION['count_wrong_fill'] = 0;
    }

    if($_POST){
        $username = $_POST['username'];
        $password = md5 ($_POST['password']);

        $status = 'A';

        // validation user data login
        $sql =  "SELECT  employee.employee_id, employee.username, employee.employee_name, employee.employee_surname, role.role_id, role.role_name, branch.branch_id ".
                "FROM tbl_employee employee ".
                "INNER JOIN tbl_role role ON employee.role_id = role.role_id ".
                "INNER JOIN tbl_branch branch ON employee.branch_id = branch.branch_id ".
                "WHERE employee.username='$username' AND employee.password='$password' AND employee.status='$status' ";

        $result = mysqli_query($con, $sql);
        if( mysqli_num_rows($result) > 0 ){

            /* Fetch result to array */
            $row = mysqli_fetch_array($result);
            $_SESSION['employee_id'] = $row['employee_id'];
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $row['employee_name'];
            $_SESSION['surname'] = $row['employee_surname'];
            $_SESSION['role_id'] = $row['role_id'];
            $_SESSION['role_name'] = $row['role_name'];
            $_SESSION['branch_id'] = $row['branch_id'];
            unset($_SESSION['count_wrong_fill']);
            $valid_login = true;

            // เป็นการหาเมนูแรกที่แสดงให้กับผู้ใช้เมื่อเข้าสู่ระบบ
            $sql =  "SELECT mt_menu.menu_action ".
                    "FROM tbl_user_menu_config user_menu ".
                    "    JOIN tbl_mt_menu_tab mt_menu ON user_menu.menu_id = mt_menu.menu_id ".
                    "WHERE user_menu.role_id = '".$row['role_id']."' AND user_menu.status = 'A' AND mt_menu.status = 'A' ".
                    "LIMIT 1";

            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $menu_name = $row['menu_action'];
            $_SESSION['first_menu_access'] = $menu_name;
            header("Location:index.php?action=$menu_name");
        } else {
            $_SESSION['count_wrong_fill'] += 1;
            $count = $_SESSION['count_wrong_fill'];
            echo "<script>disableLoginField('$count');</script>";
            $valid_login = false;
        }
    }
?>
    <body>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4  ">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"  style="color: #f91d8b;" > Log in to <span>AAA</span> FAQ  </div>
                    <div class="panel-body">
                        <?php
                            if(!$valid_login){
                        ?>
                        <div class="alert bg-danger" role="alert">
                            <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Invalid input, please try again!
                        </div>
                        <?php
                            }
                        ?>
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" name="username" type="username" id="username" placeholder="" autofocus="" required value="<?php echo isset($_POST['username'])?$_POST['username']:''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" name="password" type="password" id="password" placeholder="" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="cfmPassword">Confirm password</label>
                                    <input class="form-control" name="cfmPassword" type="password" id="cfmPassword" placeholder="confirm your password" required>
                                </div> -->
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                    <input type="reset" class="btn btn-default" value="Reset">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

<?php
    session_start();
    unset($_SESSION['employee_id']);
    unset($_SESSION["username"]);
    unset($_SESSION["name"]);
    unset($_SESSION["surname"]);
    unset($_SESSION["role_id"]);
    unset($_SESSION["role_name"]);
    unset($_SESSION["branch_id"]);
    unset($_SESSION['first_menu_access']);
    header("location: login.php ");

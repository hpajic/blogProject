<?php
require "../admin/includes/dbh.php";
session_start();

if(isset($_POST['login-btn'])){
    $username = mysqli_real_escape_string($conn,$_POST['uname']) ;
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $pass = md5($password);

    $check_user = "select * from admin_table where username = '$username' and admin_password = '$pass'";
    $run_check = mysqli_query($conn, $check_user);

    if (mysqli_num_rows($run_check)) {
        $_SESSION['usssss'] = $username;
        header("Location: ../index.php");
        
       
        
    }
    else{
        echo "Cannot login";
    }
}

?>
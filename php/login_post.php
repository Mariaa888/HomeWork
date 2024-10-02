<?php
include('../include/connection.php');
if (isset($_POST['submit'])) {
    $username = stripslashes(strtolower($_POST['username']));
    $password = stripslashes($_POST['pass']);

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    if (empty($username)) {
        $user_err = 'Enter username';
        $err_s = 1;
    } if (empty($password)) {
        $pass_err = 'Insert password';
        $err_s = 1;

    }
if (!isset($err_s)) {
    $check_user = "SELECT userName,Pass FROM register WHERE userName='$username' AND Pass='$password'";
    $result = mysqli_query($con, $check_user);
            $rows = mysqli_fetch_assoc($result);

    if (!empty($rows)&& $rows['userName'] === $username && $rows['Pass'] === $password) {
        session_start();
        $_SESSION['username'] = $rows['userName'];
        $_SESSION['pass'] = $rows['Pass'];
        header('location:../index.php');
        exit();
    }
     else
    {
       $err = '<p> Username or password are not correct</p>';
     

    }

}


    include('login.php');}
?>
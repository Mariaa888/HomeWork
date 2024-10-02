<?php
include('../include/connection.php');
if(isset($_POST['submit'])){
    $username1 = stripslashes(strtolower($_POST['username']));
    $Email = stripslashes($_POST['em']);
    $password1 = stripslashes($_POST['pass']);
    $Phone = stripslashes(strtolower($_POST['phone']));
    $address= stripslashes($_POST['adress']);
    $gender = stripslashes($_POST['gender']);

    $check_user = "SELECT * FROM register WHERE userName='$username1'";
    $check_result = mysqli_query($con, $check_user);
    $num_rows = mysqli_num_rows($check_result);

    if ($num_rows > 0) {
        $user_err = "Sorry username $username1 already exist,write anotherone<br>";
        $err_s = 1;
    }

    elseif (empty($username1)) {
        $user_err = 'Enter username <br>';
        $err_s = 1;
        
}
if (empty($password1)) {
    $pass_err = 'Enter password <br>';
    $err_s = 1;
}

elseif (strlen($password1) < 6) {
        $pass_err = 'a password must at least 6 charecters <br>';
        $err_s = 1;
    }

if (empty($Phone)) {
    $phone_err = 'Enter username <br>';
$err_s = 1;
} elseif (strlen($Phone) < 9) {
    $phone_err = 'a phone must at least 9 numbers <br>';
    $err_s = 1;
}
if (empty($address)) {
    $adress_err = 'Enter password <br>';
    $err_s = 1;
}
if (empty($Email)) {
    $email_err = 'Enter Email <br>';
    $err_s = 1;
} 
if(filter_var($Email, FILTER_VALIDATE_EMAIL) == false) {
    $email_err = 'Insert valid email <br>';
    $err_s = 1;
}

else {
        if (($err_s==0) && ($num_rows ==0)){
            $sql = "INSERT INTO register(userName,Pass,Gender,Phone,Adress,Email) 
            VALUES('$username1','$password1','$gender', '$Phone','$address', '$Email')";
             mysqli_query($con, $sql);
            session_start();
            $_SESSION['username'] = $username1;
            $_SESSION['pass'] = $password1;
             header('location:../index.php');
            exit();
        }

        else{
            
        include('signup1.php');
        }
}
include('signup1.php');
}    

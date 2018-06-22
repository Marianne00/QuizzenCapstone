<?php
    require 'includes/accounts.inc.php';
    $fname = $_POST['fname'];
    $lname = $_POST['mname'];
    $mname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $con = "";
    $accounts = new Accounts();
    if($accounts->verifyPassword($password, $confirm)){
        $accounts->registerAccount($fname, $mname, $lname, $username, $password, $con);
    }else{
        echo "Passwords don't match";
    }
?>
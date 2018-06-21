<?php
    require 'includes/accounts.inc.php';
    $fname = $_POST['fname'];
    $lname = $_POST['mname'];
    $mname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $accounts = new Accounts();
    $accounts->registerAccount($fname, $mname, $lname, $username, $password);
?>
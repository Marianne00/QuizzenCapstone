<?php
  require '../assets/includes/accounts.inc.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $con = "";

  $accounts = new Accounts();
  $accounts->loginAccount($username, $password, $con);
?>

<?php
  require '../assets/includes/accounts.inc.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $con = "";

  $accounts = new Accounts();
  $logResult = $accounts->loginAccount($username, $password, $con);
  $accounts->getUsername($logResult,$username,'home.php');
?>

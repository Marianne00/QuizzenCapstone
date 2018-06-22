<?php
mysql_connect("localhost","root","");
mysql_select_db("quizzendb");
$email=$_POST['email'];
$pw=$_POST['pw'];

$query="UPDATE hosts SET password='$pw' WHERE username= '$email'";
$query;
$result=mysql_query($query);
echo "Password Successfully Updated";
echo "<br/>";
echo "<a href='login.php'>Back to Login!</a>"
?>
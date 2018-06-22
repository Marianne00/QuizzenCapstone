<!DOCTYPE html>
<html>
<head>
	<title>Quizzen Home</title>
</head>
<body>
	<h1>This is the Homepage</h1>
	<?php 
		 require '../assets/includes/housekeeping.inc.php';
		 echo 'Welcome'.$_SESSION['hostname'];
	?>
</body>
</html>
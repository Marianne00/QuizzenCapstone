<?php
mysql_connect("localhost","root","");
mysql_select_db("quizzendb");
$check=$_POST['email'];

$query="Select * from hosts where username='$check'";
$result=mysql_query($query);

if($result)
{
    require("PHPMailer\class.phpmailer.php");
    $mailer= new PHPMailer();
    $mailer->IsSMTP();
    $mailer->Host = 'ssl://smtp.gmail.com:465';
    $mailer->SMTPAuth = TRUE;
    $mailer->Username = 'anngabriel1999@gmail.com';
    $mailer->Password = 'anngabriel1999';
    $mailer->From = 'GYSHIDO';
    $mailer->FromName = 'Team GYSHIDO!';
    
    $mailer->Body = 'Click on this'. '<a href="http://localhost:7777/CAPSTONE/QuizzenCapstone/host/EnterPassword.php">CLICK MEEE!</a>'.'link to create new passwords';
    $mailer->Subject = 'Create New Password';
    $mailer->AddAddress($check);
    if(!$mailer->Send())
    {
        echo "Message not sent<br/>";
        echo "Mailer Error: ".$mailer->ErrorInfo;
}
else
{
    echo "<h4>Open your email and click on the link</h4>";
}
}
else
{
    echo "This email is not existed";
    mysql_close();
}
?>
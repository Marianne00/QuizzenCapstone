<?php
    session_start();
    class Accounts {
        private $fname = "";
        private $mname = "";
        private $lname = "";
        private $username = "";
        private $password = "";
        public   $con = "";

        public function connectQuizzen($con) {
            $con = mysqli_connect("localhost","root","","quizzendb");
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            return $con;
        }

        public function registerAccount($fname, $mname, $lname, $username, $password, $con) {
            $conn = $this->connectQuizzen($con);

            $sql = "INSERT INTO hosts (fname, mname ,lname, username, password)
            VALUES ('$fname', '$mname', '$lname', '$username', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }

        public function verifyPassword ($pw, $confirm) {
            if($pw===$confirm){
                return true;
            }else{
                return false;
            }
        }

        public function loginAccount($username, $password, $con) {
            $conn = $this->connectQuizzen($con);

            $sql = "SELECT * FROM hosts WHERE username='$username'";

            if ($username != "" && $password != "") {
                if ($result = $conn->query($sql)) {
                    if (mysqli_num_rows($result) == 1) {
                        $user = mysqli_fetch_assoc($result);
                        if ($user['password'] == $password) {
                            return true;
                        } else {
                            echo 'Wrong Password';
                        }
                    } else {
                        echo 'User not exist';
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo 'Please fill up all the fields';
            }
        }
    

        public function getUsername($logResult,$username,$location){
            if($logResult){
                $_SESSION['hostname'] = $username;
                header('location:'.$location);
            }
        }
    }
?>

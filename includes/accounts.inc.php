<?php
    
    class Accounts {
        private $fname = "";
        private $mname = "";
        private $lname = "";
        private $username = "";
        private $password = "";
        public   $con = "";
        
        public function connectQuizzen($con) {
            $con = mysqli_connect("localhost","root","","quizzendb");
            // Check connection
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
    }


?>
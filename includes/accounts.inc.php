<?php
    
    class Accounts {
        private $fname = "";
        private $mname = "";
        private $lname = "";
        private $username = "";
        private $password = "";
        
        
        public function registerAccount($fname, $mname, $lname, $username, $password) {
            $this->$fname = $fname;
            $this->$mname = $mname;
            $this->$lname = $lname;
            $this->$username = $username;
            $this->$password = $password;
        }
        
        
    }


?>
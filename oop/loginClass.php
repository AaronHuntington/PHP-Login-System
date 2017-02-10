<?php

    class login{    

        var $email;
        var $login_password;

        public function email_exists(){
            global $database;

            $email = $this->email;

            $sql = "SELECT * FROM users WHERE email='".$email."'";
        
            $results = $database->query($sql);

            if(mysqli_num_rows($results) == 1){

                $password       = $this->getPw_by_email();
                $loginPassword  = $this->login_password;

                return utility::pw_check($password, $loginPassword);


                // return true;
            } else {
                //Email is not recorded in our database.
                $url = "login.php?adf";
                return utility::redirect_index($url);
            }
        }

        public function getPw_by_email(){
            global $database;

            // $email = $this->email;
            $email = '8ahuntington@gmail.com';

            $sql = "SELECT password FROM users WHERE email='".$email."'";

            $query = $database->query($sql);
            $value = $query->fetch_array();

            return $value['password'];
        }

        public function logged_in(){
            if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
                return true;
            } else {
                return false;
            }
        }


    }




?>
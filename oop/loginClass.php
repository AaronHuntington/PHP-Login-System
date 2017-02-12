<?php

    class login{    

        var $email;
        var $login_password;
        var $errors= array("loginEmailError", "loginPasswordError");

        public function email_exists(){
            global $database;

            $email = $this->email;

            $sql = "SELECT * FROM users WHERE email='".$email."'";
        
            $results = $database->query($sql);

            if(mysqli_num_rows($results) == 1){

                $password       = $this->getPw_by_email();
                $loginPassword  = $this->login_password;

                // return utility::pw_check($password, $loginPassword);
                if(utility::pw_check($password,$loginPassword) == 'true'){

                    $this->set_user_email();

                    $url = "cms/";
                    return utility::redirect_index($url);
                } else{
                    return 'bad';
                }

                // return true;
            } else {
                //Email is not recorded in our database.
                $url = "login.php?adf";
                return utility::redirect_index($url);
            }
        }

        public function set_user_email(){
            $email = $this->email;
            session_start();
            $_SESSION['loginEmail'] = $email;
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

        public function check_for_errors(){
            $errors = $this->errors;

            foreach($errors as $error){
                if(isset($_SESSION[$error])){
                    return true;
                }
            }
            return false;
        }
    }




?>
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
                $loginPassword  = utility::pw_encryption($this->login_password);

                // return utility::pw_check($password, $loginPassword);
                if(utility::pw_check($password,$loginPassword) == 'true'){

                    $this->set_user_email();

                    $url = "cms/";
                    return utility::redirect_index($url);
                } else{
                    $url = "login.php?adf";
                    $msg = "Entered wrong password.= ".$password;
                    utility::set_sessionMessage($msg);
                    return utility::redirect_index($url);
                }

                // return true;
            } else {
                //Email is not recorded in our database.
                $url = "login.php?adf";
                $msg = "Email not in database.";
                utility::set_sessionMessage($msg);
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

            $email = $this->email;

            $sql = "SELECT password FROM users WHERE email='".$email."'";

            $query = $database->query($sql);
            $value = $query->fetch_array();

            return $value['password'];
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
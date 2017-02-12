<?php

    class signup{

        var $firstName;
        var $lastName;
        var $email;
        var $password;
        var $passwordConfirm;
        var $image;
        var $tmp_image;
        var $imageSize;
        var $errors = array("firstNameError",
                            "lastNameError",
                            "emailError",
                            "shortPasswordError",
                            "passwordMatchError",
                            "noImgError",
                            "imgSizeError");

        public function __construct(){

        }

        public function signup_formCheck(){
            session_start();
            session_unset();

            if(strlen($this->firstName) < 3) {
                $error = "First name is too short";
                $_SESSION["firstNameError"] = "First name is too shorts".$this->firstName;
            }
            if(strlen($this->lastName) < 3){
                $error = "Last name is too short";
                $_SESSION["lastNameError"] = "Last name is too short";
            }
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $error = "Please enter valid email address";
                $_SESSION["emailError"] = "Please enter a valid email";
            }
            // else if(email_exists($this->email, $con)){
            //     $error = "Someone is already registered with this email";
            // }
            if(strlen($this->password) < 5){
                $error = "Password must be greater than 5 characters";
                $_SESSION["shortPasswordError"] = "Password must be greater than 5 Characters";
            }
            if($this->password !== $this->passwordConfirm){
                $error = "Password does not match";
                $_SESSION["passwordMatchError"] = "Password does not match";
            }
            // if($this->image == ""){
            //     $error = "Please upload your image";
            //     $_SESSION["noImgError"] = "Please upload an image0";
            // }
            // if($this->imageSize > 1048576){
            //     $error = "Image size must be less than 1 mb";
            //     $_SESSION["imgSizeError"] = "Image size must be less than 1mb.";
            // }           
            // else if(!$conditions){
            //     $error = "You must be agree with the terms and conditions";
            // }

            if($this->check_for_errors()){

                $this->set_session_variables();
                
                $url = "index.php?hello";
                return utility::redirect_index($url);
            } else{   
                $this->enter_to_database();
                $url = "login.php";
                return utility::redirect_index($url);
            }
        }

        public function enter_to_database(){
            global $database;

            $firstName  = $this->firstName;
            $lastName   = $this->lastName;
            $email      = $this->email;
            $password   = utility::pw_encryption($this->password);
            $date       = utility::print_date(); 

            $sql = "INSERT INTO users (`firstName`,`lastName`,`email`,`password`,`date`) 
                VALUES ('".$firstName."','".$lastName."','".$email."','".$password."','".$date."')";

            return $query = $database->query($sql);
        }

        public function display_errors(){
            $errors = $this->errors;

            foreach($errors as $error){ 
                 if(isset($_SESSION[$error]) && $_SESSION[$error] != ""){
                    echo $_SESSION[$error]."<br>";
                }
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

        public function set_session_variables(){
            $_SESSION['firstName'] = $this->firstName;
            $_SESSION['lastName'] = $this->lastName;
            $_SESSION['email'] = $this->email;
        }

        public function set_variables($variable){
            if(isset($_SESSION[$variable])){
                return $_SESSION[$variable];
            } else{ 
                return "";
            }
        }
    }

?>
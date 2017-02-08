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

        public function __construct(){

        }

        public function signup_formCheck(){
            if(strlen($this->firstName) < 3) {
                $error = "First name is too short";
            }
            else if(strlen($this->lastName) < 3){
                $error = "Last name is too short";
            }
            else if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $error = "Please enter valid email address";
            }
            // else if(email_exists($this->email, $con)){
            //     $error = "Someone is already registered with this email";
            // }
            else if(strlen($this->password) < 8){
                $error = "Password must be greater than 8 characters";
            }
            else if($this->password !== $this->passwordConfirm){
                $error = "Password does not match";
            }
            else if($this->image == ""){
                $error = "Please upload your image";
            }
            else if($this->imageSize > 1048576){
                $error = "Image size must be less than 1 mb";
            }           
            // else if(!$conditions){
            //     $error = "You must be agree with the terms and conditions";
            // }
            else{   
                return true;
            }
            return $error;
        }
    }

?>
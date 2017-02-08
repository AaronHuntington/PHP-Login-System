<?php

    class login{    

        public static function email_exists(){
            global $database;

            $result = mysqli_query($con,"SELECT id FROM users WHERE email='$email'");
        
            if(mysqli_num_rows($result) == 1){
                return true;
            } else {
                return false;
            }
        }

        public static function logged_in(){
            if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
                return true;
            } else {
                return false;
            }
        }


    }




?>
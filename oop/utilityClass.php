<?php

    class utility{
        public static function redirect_index($url){
            if (!headers_sent()) {
                header('Location: '.$url);
                exit;
            } else {
                echo '<script type="text/javascript">';
                echo 'window.location.href="'.$url.'";';
                echo '</script>';
                exit;
            }
        }

        public static function print_date(){
            date_default_timezone_set('America/chicago');
            $date = date('y/m/d H:i:s');
            return $date;
        }

        public static function pw_encryption($pw){
            return md5($pw);
        }

        public static function pw_check($pw1, $pw2){
            if($pw1 === $pw2){
                return 'true';
            } else {
                return 'false';
            }
        }

        public static function logIn_check(){
            if(isset($_SESSION["loginEmail"])){
                return true;
            } else{
                return false;
                // $msg = "You are not logged in.";
                // $url = BASE_URL."login.php";
                // utility::set_sessionMessage($msg);
                // utility::redirect_index($url);
            }
        }

        public static function get_userName_byEmail($email){
            global $database;

            $sql = "SELECT firstName FROM users WHERE email='".$email."'";
            $query = $database->query($sql);

            $value = $query->fetch_array();

            return $value['firstName'];
        }

        public static function set_sessionMessage($msg){
            unset($_SESSION['message']);
            $_SESSION['message'] = $msg;
        }

        public static function message(){
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            } else{
                return;
            }
        }
    }

?>
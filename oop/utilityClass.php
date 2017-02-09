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
    }

?>
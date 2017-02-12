<?php

    class user{

        var $id;
        var $firstName;
        var $lastName;
        var $email;
        var $password;
        var $date;

        public function get_users(){
            global $database;

            $sql = "SELECT * FROM users ORDER BY id";
            $query = $database->query($sql);

            $data = array();
            
            while($row = mysqli_fetch_array($query)){
                $data[] = $row;
            }
            return $data;
        }
        public function delete_user($id){
            global $database;

            $sql = "DELETE FROM users WHERE id='".$id."'";

            return $query = $database->query($sql);
        }

    }



?>
<?php
    include("inc/config.php");
    include(INC_FOLDER_ROOTPATH."init.php");

    
    $loginClass = new login; 

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
  
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
            
    $conditions = isset($_POST['conditions']);

    // echo $firstName." / ". $lastName ." / ". $email ." / ". $password ." / ". $passwordConfirm ." / ". $image;

?>
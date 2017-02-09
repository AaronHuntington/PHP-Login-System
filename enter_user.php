<?php
    include("inc/config.php");
    include(INC_FOLDER_ROOTPATH."init.php");

    
    $signupClass = new signup; 

    $signupClass->firstName = $_POST['firstName'];
    $signupClass->lastName = $_POST['lastName'];
    $signupClass->email = $_POST['email'];
    $signupClass->password = $_POST['password'];
    $signupClass->passwordConfirm = $_POST['passwordConfirm'];
  
    $signupClass->image = $_FILES['image']['name'];
    $signupClass->tmp_image = $_FILES['image']['tmp_name'];
    $signupClass->imageSize = $_FILES['image']['size'];
            
    // $conditions = isset($_POST['conditions']);

    // echo $firstName." / ". $lastName ." / ". $email ." / ". $password ." / ". $passwordConfirm ." / ". $image;
    // echo 'woa: '.$signupClass->firstName;


    $signupClass->signup_formCheck();
?>
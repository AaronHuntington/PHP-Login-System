<?php
    include(INC_FOLDER_ROOTPATH."init.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="<?php echo BASE_URL;?>css/styles.css"  />
    </head>
    <div id="errorBox" style="">
        <?php
            session_start();

            $signupClass = new signup;
            $signupClass->display_errors();
            // print_r( $_SESSION);
            // echo $signupClass->check_for_errors();

  
        ?>
    </div>
    <?php
        include('topNavigation.php');
    ?>
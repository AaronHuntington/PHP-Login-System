<?php
    include('../inc/config.php');
    include(INC_FOLDER_ROOTPATH."header.php");

    session_start(); 
    session_destroy();
    session_start();

    $msg = "Thank you for visiting!";
    $url = BASE_URL."login.php"; 
    utility::set_sessionMessage($msg);
    utility::redirect_index($url);

?>

        </div>
    </body>
</html>
<?php
    include('../inc/config.php');
    include(INC_FOLDER_ROOTPATH."header.php");

    if(utility::logIn_check()){

    } else{
        $msg = "You are not logged in.";
        $url = BASE_URL."login.php";
        utility::set_sessionMessage($msg);
        utility::redirect_index($url);
    }
    echo '<br><br>';
    echo $_SESSION['loginEmail'];
    echo '<br><br>';

    $userName = utility::get_userName_byEmail($_SESSION['loginEmail']);
?>
            <h1>Inside CMS</h1>
            <div id="cms_box">
                <h2>Welcome, <?php echo $userName;?>!</h2>
                <h3>
                    <a href="logout.php">
                        Logout
                    </a>
                </h3>
            </div>
        </div>
    </body>
</html>
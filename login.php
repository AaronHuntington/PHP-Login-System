<?php

    include("inc/config.php");
    include(INC_FOLDER_ROOTPATH."header.php");
    
    echo utility::logIn_check();


    $loginClass = new login;

    if($loginClass->logged_in())
    {
        header("location:profile.php");
        exit();
    }

    if(isset($_POST['submit']))
    {
        $loginClass->email          = $_POST['email'];
        $loginClass->login_password = $_POST['password']; 

        $loginClass->email_exists();
    }

    utility::message();
?>
            <div id="formDiv">
                <form method="POST" action="login.php">
                    <label>Email:</label><br/>
                    <input type="text" class="inputFields"  name="email" required/><br/><br/> 
                    
                    <label>Password:</label><br/>
                    <input type="password" class="inputFields"  name="password" required/><br/><br/>
                    
                    <!-- <input type="checkbox" name="keep" />
                    <label>Keep me logged in</label><br/><br/> -->
                   
                    <input type="submit" name="submit" class="theButtons" value="login" />
                </form>
            </div>
        </div>
    </body>
</html>
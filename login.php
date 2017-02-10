<?php

    include("inc/config.php");
    include(INC_FOLDER_ROOTPATH."header.php");
    
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

        var_dump($loginClass->email_exists());

        
    
        // $email = mysqli_real_escape_string($con, $_POST['email']);
        // $password = mysqli_real_escape_string($con, $_POST['password']);
        // $checkBox = isset($_POST['keep']);
        
        // if(email_exists($email,$con))
        // {
        //     $result = mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
        //     $retrievepassword = mysqli_fetch_assoc($result);
            
        //     if(!password_verify($password, $retrievepassword['password']))
        //     {
        //         $error = "Password is incorrect";
        //     }
        //     else
        //     {
        //         $_SESSION['email'] = $email;
                
        //         if($checkBox == "on")
        //         {
        //             setcookie("email",$email, time()+3600);
        //         }
                
        //         header("location: profile.php");
        //     }
        // }
        // else
        // {
        //     $error = "Email Does not exists";
        // }
    }
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
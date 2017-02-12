<?php
    include("inc/config.php");
    include(INC_FOLDER_ROOTPATH."header.php");

    $signupClass = new signup;

    $firstName  = $signupClass->set_variables('firstName');
    $lastName   = $signupClass->set_variables('lastName');
    $email      = $signupClass->set_variables('email');
    $image      = $signupClass->set_variables('image');

?>
            <div id="formDiv">  
                <form method="POST" action="enter_user.php" enctype="multipart/form-data">

                    <label>First Name:</label><br/>
                    <input type="text" 
                        name="firstName" 
                        class="inputFields" 
                        value="<?php echo $firstName; ?>" 
                        require/><br/><br/>

                    <label>Last Name:</label><br/>
                    <input type="text" 
                        name="lastName"  
                        class="inputFields" 
                        value="<?php echo $lastName; ?>" 
                        require/><br/><br/>

                    <label>Email:</label><br/>
                    <input type="text" 
                        name="email"  
                        class="inputFields" 
                        value="<?php echo $email; ?>"
                        require/><br/><br/>

                    <label>Password:</label><br/>
                    <input type="password" 
                        name="password" 
                        class="inputFields" 
                        require/><br/><br/>

                    <label>Re-enter Password:</label><br/>
                    <input type="password" 
                        name="passwordConfirm"  
                        class="inputFields" 
                        require/><br/><br/>
<!-- 
                    <label>Image:</label><br/>
                    <input type="file" 
                        name="image" 
                        id="imageupload"/><br/><br/> -->

                    <!-- <input type="checkbox" name="conditions" />
                    <label>I agree with terms and conditions.</label><br/><br/> -->

                    <input type="submit"  class="theButtons"  name="submit" />
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    include("inc/config.php");
    include(INC_FOLDER_ROOTPATH."header.php");

    if(isset($_POST['submit'])){
        $signupClass = new signup;


        $signupClass->firstName         = $_POST['firstName'];
        $signupClass->lastName          = $_POST['lastName'];
        $signupClass->email             = $_POST['email'];
        $signupClass->password          = $_POST['password'];
        $signupClass->passwordConfirm   = $_POST['passwordConfirm'];
      
        $signupClass->image     = $_FILES['image']['name'];
        $signupClass->tmp_image = $_FILES['image']['tmp_name'];
        $signupClass->imageSize = $_FILES['image']['size'];

        echo $signupClass->signup_formCheck();
    }

?>
            <div id="formDiv">
                <form method="POST" action="index.php" enctype="multipart/form-data">

                    <label>First Name:</label><br/>
                    <input type="text" name="firstName" class="inputFields" required/><br/><br/>

                    <label>Last Name:</label><br/>
                    <input type="text" name="lastName"  class="inputFields" required/><br/><br/>

                    <label>Email:</label><br/>
                    <input type="text" name="email"  class="inputFields" required/><br/><br/>

                    <label>Password:</label><br/>
                    <input type="password" name="password" class="inputFields"  required/><br/><br/>

                    <label>Re-enter Password:</label><br/>
                    <input type="password" name="passwordConfirm"  class="inputFields" required/><br/><br/>

                    <label>Image:</label><br/>
                    <input type="file" name="image" id="imageupload"/><br/><br/>

                    <input type="checkbox" name="conditions" />

                    <label>I agree with terms and conditions.</label><br/><br/>

                    <input type="submit"  class="theButtons"  name="submit" />
                </form>
            </div>
        </div>
    </body>
</html>
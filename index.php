<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="css/styles.css"  />
    </head>
    <body>
        <div id="wrapper">
            <div id="menu">
                <a href="index.php">Sign Up</a>
                <a href="login.php">Login</a>
            </div>
            <div id="formDiv">
                <form method="POST" action="index.php" enctype="multipart/form-data">

                    <label>First Name:</label><br/>
                    <input type="text" name="fname" class="inputFields" required/><br/><br/>

                    <label>Last Name:</label><br/>
                    <input type="text" name="lname"  class="inputFields" required/><br/><br/>

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
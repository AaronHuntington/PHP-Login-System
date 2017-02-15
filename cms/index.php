<?php
    include('../inc/config.php');
    include(INC_FOLDER_ROOTPATH."header.php");

    if(utility::logIn_check()){

    } else {
        $msg = "You are not logged in.";
        $url = BASE_URL."login.php";
        utility::set_sessionMessage($msg);
        utility::redirect_index($url);
    }

    $userName = utility::get_userName_byEmail($_SESSION['loginEmail']);

    $userClass = new user;
    $users = $userClass->get_users();

?>
            <h1 style="text-align: center;">Inside CMS</h1>
            <h3 style="text-align: center; color:red;">
                <?php
                    utility::message();
                ?>
            </h3>
            <div id="cms_box">
                <h2>Welcome, <?php echo $userName;?>!</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Date</th>
                    </tr>
                    <?php
                        foreach($users as $user){
                            echo '<tr>';
                            echo '<td>';
                            echo $user['id'];
                            echo '<br>';
                            echo '<a href="del_user.php?id='.$user['id'].'">DEL</a>';
                            echo '</td>';
                            echo '<td>'.$user['firstname'].'</td>';
                            echo '<td>'.$user['lastname'].'</td>';
                            echo '<td>'.$user['email'].'</td>';
                            echo '<td>'.$user['password'].'</td>';
                            echo '<td>'.$user['date'].'</td>';
                            echo '</tr>';
                        }


                    ?>
                </table>
                <h3>
                    <a href="logout.php">
                        Logout
                    </a>
                </h3>
            </div>
        </div>
    </body>
</html>
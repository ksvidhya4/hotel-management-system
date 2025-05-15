<?php require('register1/connection.php');
session_start();

#for login
if (isset($_POST['login'])) {
    $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`= '$_POST[email_username]'";

    $result = mysqli_query($con, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) 
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['password'] == $_POST['password'])
             {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                header("location:rooms.php");
            }
            else {
                echo "
                <script>alert('incorrect password');
                window.location.href='home1.php';
                </script>
                ";
            }
        }
        else{
            echo "
            <script>alert(' email or username not registered');
            window.location.href='home1.php';
            </script>
            ";
        }
    }
    
else
 {
  echo "
             <script>alert('Cannot Run Query');
                window.location.href='home1.php';
                </script>
                    ";
}

}














#for registration
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]' ";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) #it will be executed if username or email is already taken
        {
            #if any user has already taken username or email
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                #error for username already registered
                echo "<script>alert('$result_fetch[username]-Username already taken');
                window.location.href='home1.php';
                </script>
                ";
            } else {
                #error for email already registered
                echo
                " <script>
                alert('$result_fetch[email]-E-mail already registered ');
                window.location.href='home1.php';
                </script>
                ";
            }
        } else {

            $query = "INSERT INTO `registered_users`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
            if (mysqli_query($con, $query)) {
                echo "
                <script>alert('Registeration Successfull');
                window.location.href='home1.php';
                </script>
                ";
            }
            #if data cannot be inserted 
            else {
                echo "
                    <script>alert('Cannot run Query');
                    window.location.href='home1.php';
                    </script>
                    ";
            }
        }
    } else {
        echo "
            <script>alert('Cannot run Query');
            window.location.href='home1.php';
            </script>
            ";
    }
}

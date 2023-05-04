<?php
    session_start();

    include "config.php";


    $username = $_POST['username'];
    $password = $_POST['password'];
    $op = $_GET['op'];

   if($op=="in")
   {
        $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`= '$username' AND `password` = '$password' ");
        if(mysqli_num_rows($sql)==1)
        {
            $query = mysqli_fetch_array($sql);
            $_SESSION['username'] = $query['username'];
            $_SESSION['user_type'] = $query['user_type'];
            $_SESSION['user_id'] = $query['user_id'];

            
            if($query['user_type']=="1")
            {
                header("location:admin-home.php");
                $_SESSION['user_id'] = $user_id;
                setcookie('user_type', $user_type, time() + (86400 * 30), "/"); // expires in 30 days
            }
            else if($query['user_type']=="0")
            {
                header("location:home.php");
                $_SESSION['user_id'] = $user_id;
                setcookie('user_type', $user_type, time() + (86400 * 30), "/"); // expires in 30 days

            }
        }
        else
        {
            ?>
            <script language="JavaScript">
                alert('Username or Password does not match. Retry!');
                document.location='logIn.php';
            </script>
            <?php
        }
    }
    else if($op=="out")
    {
        unset($_SESSION['username']);
        unset($_SESSION['user_type']);
    }

?>
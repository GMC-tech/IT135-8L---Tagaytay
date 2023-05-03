<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin-navbar.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- <title>Document</title> -->
</head>
<body>
    <header>
        <a href="home.php" class="logo"><img src="navbar-image/logo.png"></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">MENU</label>

        <nav class="navbar">
            <ul>
                <li><a href="admin-managePost.php">MANAGE POSTS +</a>
                    <ul>
                        <li><a href="admin-managePrograms.php">PROGRAMS</a></li>
                        <li><a href="admin-manageNews.php">NEWS</a></li>
                        <li><a href="admin-manageEvents.php">EVENTS</a></li>
                    </ul>
                </li>
                <li><a href="viewUser.php">MANAGE USERS</a></li>
                <li>
                    <?php if(empty($_SESSION['username'])): ?>
                        <a href="#">ACCOUNT</a>
                        <ul>
                            <li><a href="logIn.php">LOGIN</a></li>
                        </ul>
                    <?php else: ?>
                        <a href="admin-home.php"><?php echo $_SESSION['username']; ?></a>
                        <ul>
                            <li><a href="logout.php">LOGOUT</a></li>
                        </ul>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>
       
</body>

</html>
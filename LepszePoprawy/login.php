<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="page.css?=33"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            $islogged = 1;
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <h1 class="header-title">Poprawy ocen</h1>
    <div class="content">
        <form class="form" method="post" name="login">
            <div class="fullcontent">
                <div class="thecontent">
                    <div class="theform">
                        <h3 class="login-title">Zaloguj się</h3>
                        <input type="text" class="login-input" name="username" placeholder="Nazwa użytkownika" autofocus="true"/>
                        <input type="password" class="login-input" name="password" placeholder="Hasło"/>
                    </div>
                    <div class="thebutton">
                        <input type="submit" value="Zaloguj" name="submit" class="login-button"/>
                    </div>
                </div>
                <p class="link"><a href="register.php">Zarejestruj się</a></p>
            </div>  
        </form>
    </div>
    <h3 class="footer-title">Strona stworzona przez: 03320606017</h3>
<?php
    }
?>
</body>
</html>
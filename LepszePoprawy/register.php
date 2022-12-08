<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="page.css?v=69"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'><a href='login.php'>Click here to Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <h1 class="header-title">Poprawy ocen</h1>
    <div class="content">
        <form class="form" action="" method="post">
            <div class="fullcontent">
                <div class="thecontent">
                    <div class="theform">
                    <h3 class="login-title">Dołącz do nas!</h3>
                        <input type="text" class="login-input" name="username" placeholder="Username" required />
                        <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
                        <input type="password" class="login-input" name="password" placeholder="Password" required>
                    </div>
                    <div class="thebutton">
                        <input type="submit" name="submit" value="Register" class="login-button">
                    </div>
                </div>
                <p class="link"><a href="login.php">Click to Login</a></p>
            </div>
        </form>
    </div>
    <h3 class="footer-title">Strona stworzona przez: 03320606017</h3>
<?php
    }
?>
</body>
</html>
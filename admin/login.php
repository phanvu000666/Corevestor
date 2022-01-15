<?php
session_start();
require_once 'Model/FactoryPattern.php';
$factory = new FactoryPattern();
$Auth = $factory->make('auth');

$error = " ";
if (!empty($_POST['submit'])) {
    $username = $_POST["username"];
     //Sử dùng htmlentities để chuyển đổi tất cả các ký tự áp dụng thành các thực thể HTML trước khi login
    $users = [
        'username' => htmlentities($_POST['username']),
        'password' => htmlentities($_POST['password'])
    ];
    $user = NULL;
    if ($user = $Auth->auth($users['username'], $users['password'])) {
        //Login successful
        $_SESSION['id'] = $user[0]['id_user'];
        $_SESSION['username'] =$username;
        $_SESSION['groupID'] = $user[0]['group_id'];
        $_SESSION['message'] = 'Login successful';
        header('location: index.php');
    }else {
        //Login failed
        echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu!"); window.location="login.php";</script>';
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Smart Phone</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css1/util.css">
    <link rel="stylesheet" type="text/css" href="css1/main.css">
    <link rel="stylesheet" type="text/css" href="css1/css-auth.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </input>
            </div>
        </form>
        <br><br>
        <div class="text-center">
            <a href="register.php">
            Do not have an account? Sign Up!
            </a>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor1/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor1/bootstrap/js/popper.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor1/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor1/daterangepicker/moment.min.js"></script>
    <script src="vendor1/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor1/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
<?php
session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "admin"){
        $_SESSION["username"] = "admin";
    } else {
        $error = "<p>Username or Password incorrect!</p>";
    }
}
if(isset($_SESSION["username"])){
    header("Location: manage.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN || AB IT LIMITED</title>
        <link rel="stylesheet" href="./styles/style.css" />
    </head>
    <body>
        <?php include "header.inc"?>
        <div class="container">
            <div class="login-area">
                <p>Username: admin<br>Password: admin</p>
                <form method="post">
                    <input type="text" name="username"/>
                    <input type="password" name="password">
                    <input type="submit" value="Log In">
                </form>
                <?php echo $error; ?>
            </div>
        </div>
    </body>
</html>
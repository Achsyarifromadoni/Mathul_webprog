<?php
  require_once("koneksidb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div class="containerlogin"> -->
        <form action="checklogin.php" method="post">
            <?php
            session_start();
            session_destroy();
            if(isset($_SESSION['pesan'])){
                echo $_SESSION['pesan'];
            }
            
            ?>
            <div class="form-field">
                <!-- <label for="txt_user">Username</label> -->
                <input type="text" name="txt_user" id="txt_user" placeholder="Email / Username">
            </div>
            <div class="form-field">
                <!-- <label for="txt_pasw">Password</label> -->
                <input type="password" name="txt_pasw" id="txt_pasw" placeholder="Password">
            </div>
            <div class="form-field">
                <button class="btn" type="submit" name="btn_login">Login</button>
            </div>
        </form>
    <!-- </div> -->
</body>
</html>
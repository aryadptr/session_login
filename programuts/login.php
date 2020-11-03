<?php
    include_once("functions/koneksi.php");
    include_once("functions/helper.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Program UTS</title>
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-primary">

    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
    ?>

    <section class="formLogin">
        <form action="prosesLogin.php" method="POST">
            <h3>LOGIN</h3>
            <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" class="form-control form-login" placeholder="username" required="required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control form-login" placeholder="password" required="required">
            </div>
            <center>
                <input type="submit" class="btn btn-primary login-btn" value="Login">
            </center>
            <center>
                <a href="<?php echo BASEURL."register.php"; ?>" class="btn-back">Register</a>
            </center>
            <footer style="padding-top: 25px; padding-left: 75px; font-size: 12px;">Copyright by &copy;AryaDev 2020</footer>
        </form>
    </section>

</body>
</html>
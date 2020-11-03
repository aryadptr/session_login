<?php
    include_once('functions/helper.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Program UTS</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-primary">
    <section class="formRegistrasi">
        <form action="prosesRegister.php" method="POST">
            <h3>REGISTER</h3>
            <div class="form-group">
                <label>Name</label>
                <input name="nama" type="text" class="form-control form-login" placeholder="cth : Arya Dwi Putra" required="required">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" type="text" class="form-control form-login" placeholder="cth : De Paris Residence" required="required">
            </div>
            <div class="form-group">
                <label>Nomor Handphone</label>
                <input name="nohp" type="text" class="form-control form-login" placeholder="cth : 08967765566" required="required">
            </div>
            <div class="form-group mb-3">
            <label>Jenis Kelamin</label>
                <select name="jenis_kelamin"  class="custom-select" id="inputGroupSelect02">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" class="form-control form-login" placeholder="cth : aryadptr" required="required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control form-login" placeholder="password" required="required">
            </div>
            <div class="form-group">
                <label>Re-type Password</label>
                <input name="re-password" type="password" class="form-control form-login" placeholder="re-type password" required="required">
            </div>
            <center>
                <input type="submit" class="btn btn-primary login-btn" value="Register">
            </center>
            <center>
            <label for="">Already Have an Account?</label><a href="<?php echo BASEURL."login.php";?>" class="btn-back"> Login</a>
            </center>
            <footer style="padding-top: 25px; padding-left: 125px; font-size: 12px;">Copyright by &copy;AryaDev 2020</footer>
        </form>
    </section>
</body>
</html>
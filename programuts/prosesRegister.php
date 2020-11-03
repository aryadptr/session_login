<?php

    include_once('functions/koneksi.php');
    include_once('functions/helper.php');
    
    $nama_lengkap = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nohp = $_POST['nohp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re-password'];
    $level = "member";

    mysqli_query($koneksi, "INSERT INTO user (nama,alamat,jenis_kelamin,nohp,username,password, level)
                            VALUES ('$nama_lengkap', '$alamat', '$jenis_kelamin', '$nohp', '$username', '$password', '$level')");

    header("location: ".BASEURL."login.php");
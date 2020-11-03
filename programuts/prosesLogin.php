<?php 
    session_start();
    include_once('functions/koneksi.php');
    include_once('functions/helper.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    
    if($cek > 0){
 
        $data = mysqli_fetch_assoc($login);

        if($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:halaman_admin.php");
        }else if($data['level']=="member"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "member";
            header("location:".BASEURL."halaman_member.php");
        }else{
            header("location:".BASEURL."login.php?pesan=gagal");
        }	
    }else{
        header("location:".BASEURL."login.php?pesan=gagal");
    }

<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dbuser";

    $koneksi = mysqli_connect($server, $username, $password, $database) OR DIE("Can't Connect to Database");
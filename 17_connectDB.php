<?php

// Kết nối đến cơ sở dữ liệu
function connect()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "2503E1";

    $con = mysqli_connect($servername, $username, $password, $database);
    if (!$con) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    } else {
        return $con;
    }
}


function disconnect($cn)
{
    mysqli_close($cn);
}

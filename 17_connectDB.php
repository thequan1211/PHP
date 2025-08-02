<?php

// Kết nối đến cơ sở dữ liệu
function connect() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "2503E1";

    $con= mysqli_connect($servername, $username, $password, $database);
    if (!$con) {
        echo "Kết nối thất bại: <br>";
        die("Kết nối thất bại: " . mysqli_connect_error());
    }else {
        echo "Kết nối thành công đến cơ sở dữ liệu!<br>";
        return $con;
    }
}


function disconnect($cn) {
    mysqli_close($cn);
    echo "Đã ngắt kết nối đến cơ sở dữ liệu!<br>";
}

?>
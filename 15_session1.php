<?php
    session_start();
    //kiem tra session da duoc khoi tao chua
    if(isset($_SESSION['username'])) {
        echo "Username: " . $_SESSION['username'] . "<br>";
        echo "Password: " . $_SESSION['password'] . "<br>";

        //thay doi gia tri session
        $_SESSION['username'] = 'user';
        $_SESSION['password'] = '456';
        echo "After change:<br>";
        //hien thi gia tri moi cua session
        echo "Username: " . $_SESSION['username'] . "<br>";
        echo "Password: " . $_SESSION['password'] . "<br>";
    } else {
        echo "Username is not set.<br>";
    }
?>
<?php
    if(isset($_GET['btnSubmit'])) {
        $name = $_GET['name'];
        $password = $_GET['password'];
        echo "Name: $name <br>";
        echo "Password: $password <br>";
    } else {
        echo "No data submitted.";
    }
?>
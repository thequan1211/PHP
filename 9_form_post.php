<?php
    if(isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        echo "Name: $name <br>";
        echo "Password: $password <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9_form_post.php" method="post">
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit" name="btnSubmit">

    </form> 
</body>
</html>
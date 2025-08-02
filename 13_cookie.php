<?php
if (isset($_POST['btnLogin'])) {
    //get gia tri cua cac field tu form dua len
    $username = $_POST['username'];
    $password = $_POST['password'];
    //kiem tra neu checkbox remember duoc check
    if (isset($_POST['remember'])) {
        //tao cookie username, password, time 1h
        setcookie('username', $username, time() + 120); // 2s
    }
    if ($username == 'admin' && $password == '123'){
        echo "Welcome Admin";
    }else {
        echo "Welcome User";
    }
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
    <h1>Login</h1>
    <form action="13_cookie.php" method="post">
        <div>
            Username: <input type="text" name="username" value="
            <?php
            //neu cookie username ton tai thi hien thi no
            if (isset($_COOKIE['username']))
                echo $_COOKIE['username'];
            ?>">
        </div>
        <div>
            Password: <input type="password" name="password">
        </div>
        <div>
            Remember: <input type="checkbox" name="remember">
        </div>
        <div>
            <input type="submit" value="Login" name="btnLogin">
        </div>
    </form>
</body>
</html>
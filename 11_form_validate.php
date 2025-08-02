<?php
    $nameErr = $passwordErr = $confirmPasswordErr = $emailErr = "";

    if(isset($_POST['btnRegister'])) {
        //username: bat dau la chu cai, it nhat la 2 ky tu
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z]\w+$/', $name)){
            //bao loi
            $nameErr = "Username: bat dau la chu cai, it nhat la 2 ky tu ";
        }
        //password: it 3 ky tu va bat ky tu nao
        $password = $_POST['password'];
        if(!preg_match('/^.{3,}$/', $password)){
            //bao loi
            $passwordErr = "Password: it 3 ky tu va bat ky tu nao";
        }
        //confirm password: phai trung voi password
        $confirmPassword = $_POST['confirm_password'];
        if($confirmPassword !== $password){
            //bao loi
            $confirmPasswordErr = "Confirm Password: phai trung voi Password";
        }
        //email: dung dinh dang email
        $email = $_POST['email'];
        //preg_match("/^\w+@\w+\.\w+$/", $email)
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            //bao loi
            $emailErr = "Email: khong dung dinh dang email";
        }
        if($nameErr == "" && $passwordErr == "" && $confirmPasswordErr == "" && $emailErr == "") {
            //neu khong co loi, xu ly du lieu
            echo "Dang ky thanh cong";
            //thuc hien luu vao csdl
            //...
        } else {
            echo "Dang ky that bai";
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
<style>
    .error {
        color: red;
        font-style: italic;
    }
</style>
<body>
    <h1>Register</h1>
    <form action="11_form_validate.php" method="post">
        <div>
            Username: <input type="text" name="name">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>
        <div>
            Password: <input type="password" name="password">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>
        <div>
            ConfirmPassword: <input type="password" name="confirm_password">
            <span class="error"><?php echo $confirmPasswordErr; ?></span>
        </div>
        <div>
            Email: <input type="email" name="email">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>
        <div>
            Birthday: <input type="date" name="birthday" required>
        </div>
        <div>
            <input type="submit" value="Register" name="btnRegister">
        </div>
    </form>
</body>
</html>
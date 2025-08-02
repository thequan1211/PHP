<?php
    if(isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        echo "Name: $name <br>";
        echo "Password: $password <br>";
    }
    else
    {
?>

    <form action="10_form_post_v2.php" method="post">
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit" name="btnSubmit">
    </form> 
<?php
    }
?>


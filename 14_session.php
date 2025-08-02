<?php
    session_start();
    // set gia tri cho session
    $_SESSION['username'] = 'admin';
    $_SESSION['password'] = '123';
    
    echo "Session variables are set.<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="15_session1.php" target="_blank">Session1</a>
    <a href="16_session2.php" target="_blank">Session2</a>
</body>
</html>
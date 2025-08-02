<?php
    include_once '17_connectDB.php';
    //mo ket noi toi co so du lieu
    if(isset($_POST['btnAdd'])) {
        $cn = connect();
    //get gia tri tu form dua len
    $name = $_POST['stuName'];
    $gender = $_POST['stuGender'];
    $dob = $_POST['dob'];
    //viet cau truy van
    $query = "INSERT INTO tbStudent (stuName, stuGender, stuDOB) VALUES ('$name', '$gender', '$dob')";
    // thuc thi cau truy van
    $result = mysqli_query($cn, $query);
    //dong ket noi
    disconnect($cn);
    //chuyen ve trang index
    header("location:18_student_index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Create</title>
</head>
<body>
    <h1>Add new student</h1>
    <form action="19_student_create.php" method="post">
        <div>
            Name: <input type="text" name="stuName" required>
        </div>
        <div>
            Gender: <input type="radio" name="stuGender" value="Male">Male
                    <input type="radio" name="stuGender" value="Female">Female
        </div>
        <div>
            Date of Birth: <input type="date" name="dob" required>
        </div>
        <div>
            <input type="submit" value="Add Student" name="btnAdd">
        </div>
    </form>
</body>
</html>
<?php
    include_once '17_connectDB.php';
    //lay gia tri cu cua student
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        // mo ket noi toi co so du lieu
        $cn = connect();

        // viet cau truy van
        $query = "SELECT * FROM tbStudent WHERE stuID = $id";
        // thuc thi cau truy van - tra ve 1 dong du lieu
        $row = mysqli_query($cn, $query);
        
        $item = mysqli_fetch_assoc($row);
        // dong ket noi
        disconnect($cn);
    }
    //mo ket noi toi co so du lieu
    if(isset($_POST['btnEdit'])) {
        $cn = connect();
    //get gia tri tu form dua len
    $id = $_POST['id'];
    $name = $_POST['stuName'];
    $gender = $_POST['stuGender'];
    $dob = $_POST['dob'];
    //viet cau truy van
    $query = "UPDATE tbStudent SET stuName = '$name', stuGender = '$gender', stuDOB = '$dob' WHERE stuID = $id";
    // thuc thi cau truy van
    $result = mysqli_query($cn, $query);
    //dong ket noi
    if ($result) {
            // Redirect to index page on successful update
            header("location:18_student_index.php");
            exit(); // Always call exit() after header() redirect
        } else {
            echo "<p style='color:red;'>Error updating student: " . mysqli_error($cn) . "</p>";
        }
        disconnect($cn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
</head>
<body>
    <h1>Edit student</h1>
    <form action="20_student_edit.php" method="post">
        <div>
            ID : <input type="text" name="id" readonly value="<?php echo $item['stuID']?>">
        </div>
        <div>
            Name: <input type="text" name="stuName" required value="<?php echo $item['stuName']?>">
        </div>
        <div>
            Gender: <input type="radio" name="stuGender" value="Male"
                    <?php if($item['stuGender'] == "Male") echo "checked" ?>>Male
                    <input type="radio" name="stuGender" value="Female"
                    <?php if($item['stuGender'] == "Female") echo "checked" ?>>Female
        </div>
        <div>
            Date of Birth: <input type="date" name="dob" required value="<?php echo $item['stuDOB']?>">
        </div>
        <div>
            <input type="submit" value="Edit" name="btnEdit">
        </div>
    </form>
</body>
</html>
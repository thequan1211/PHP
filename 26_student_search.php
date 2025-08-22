<?php
    include_once '17_connectDB.php';
    //mo ket noi toi co so du lieu
    $con = connect();
    // viet cau truy van
    $query = "SELECT * FROM tbStudent";
    // thuc thi cau truy van
    $result = mysqli_query($con, $query);
    if (!$result) {
        die ("Lỗi truy vấn: ") ;
    } 
    //khai bao 1 mang rong de chua du lieu trich xuat ra tu bang ket qua
    $students = [];
    while($row=mysqli_fetch_assoc($result)) {
        $students[] = $row; //them du lieu vao mang
    }
    //xy ly search
    if (isset($_GET['btnSearch'])) {
        $search = $_GET['search'];
        //viet cau truy van
        $query = "SELECT * FROM tbStudent WHERE stuName LIKE '%$search%'";
        // thuc thi cau truy van
        $result = mysqli_query($con, $query);
        if (!$result) {
            die ("Lỗi truy vấn: ") ;
        } 
        //reset mang students
        $students = [];
        while($row=mysqli_fetch_assoc($result)) {
            $students[] = $row; //them du lieu vao mang
        }
    }
    if (isset($_GET['btnSearch'])) {
        $search = $_GET['search'];
        //viet cau truy van
        $query = "SELECT * FROM tbStudent WHERE stuName LIKE '%$search%'";
        // thuc thi cau truy van
        $result2 = mysqli_query($con, $query);
        if (!$result2) {
            die ("Lỗi truy vấn: ") ;
        } 
        //reset mang students
        $students = [];
        while($row = mysqli_fetch_assoc($result2)) {
            $students[] = $row; //them du lieu vao mang
        }
    }
    //dong ket noi
    disconnect($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Student List</h1>


    <h2>
        <a href="19_student_create.php">Add new student</a>
    </h2>
    <form action="26_student_search.php" method="get">
        <input type="text" name="search" placeholder="Search by name">
        <input type="submit" value="Search" name="btnSearch">
    </form>
    <br>
    <table border="1">
        <thead>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Gender</th>
            <th>Student DOB</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($students as $item) { ?>
                <tr>
                    <td><?php echo $item['stuID'] ?></td>
                    <td><?php echo $item['stuName'] ?></td>
                    <td><?php echo $item['stuGender'] ?></td>
                    <td><?php echo $item['stuDOB'] ?></td>
                    <td>

                        <a href="21_student_delete.php?id=<?php echo $item['stuID']; ?>"
                            onclick="return confirm('Are you sure to delete?')">Delete </a>|
                        <a href="20_student_edit.php?id=<?php echo $item['stuID']; ?>">Edit</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
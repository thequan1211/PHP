<?php
include_once '17_connectDB.php';
if(isset($_GET['search'])) {
        $search = $_GET['search'];
        $con = connect();

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
        //dong ket noi
        disconnect($con);
        ?>

        <?php foreach ($students as $item) { ?>
                <tr>
                    <td><?php echo $item['stuID'] ?></td>
                    <td><?php echo $item['stuName'] ?></td>
                    <td><?php echo $item['stuGender'] ?></td>
                    <td><?php echo $item['stuDOB'] ?></td>
                    <td>

                        <a href="21_student_delete.php?id=<?php echo $item['stuID']; ?>"
                            onclick="return confirm('Are you sure to delete?')">Delete</a>
                        <a href="20_student_edit.php?id=<?php echo $item['stuID']; ?>">Edit</a>

                    </td>
                </tr>
            <?php } ?>
<?php
}
?>
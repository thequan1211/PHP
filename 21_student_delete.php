<?php
    include_once '17_connectDB.php';
    //lay gia tri cu cua student
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        // mo ket noi toi co so du lieu
        $cn = connect();

        // viet cau truy van
        $query = "DELETE FROM tbStudent WHERE stuID = $id";
        // thuc thi cau truy van - tra ve 1 dong du lieu
        mysqli_query($cn, $query);
        
        // dong ket noi
        disconnect($cn);
        // chuyen ve trang index
        header("location:18_student_index.php");
    }
?>
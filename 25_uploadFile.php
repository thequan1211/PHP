<?php
if (isset($_POST['btnSubmit'])) {
    if (isset($_FILES['image'])) {
        $file = $_FILES['image'];
        print_r($file);
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        //kiem tra xem file up len co phai la hinh khong
        //cat chuoi thanh mang
        $newName = explode(".", $fileName);
        //get phan tu cuoi cung
        $extension = end($newName);
        //khai bao 1 mang cac dinh dang file
        $accept_ext = ["jpg", "jpeg", "png", "gif"];
        //kiem tra dinh dang file
        $result = in_array($extension, $accept_ext);
        if (!$result) {
            echo "<br>File is not valid : " . $fileName;
        } else {
            //kiem tra kich thuoc file co lon hon 2MB khong
            if ($fileSize > 2 * 1024 * 1024) {
                echo "<br>File have to <= 2MB : " . $fileName;
            } else {
                //neu file hop le thi tien hanh upload
                move_uploaded_file($fileTmpName, "upload/" . $fileName);
                echo "<br>File uploaded successfully: " . $fileName;
            }
        }
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
    <h1>Upload File</h1>
    <form action="25_uploadFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload" name="btnSubmit">
    </form>
    <div>
        <img src="upload/<?php echo $fileName ?>" alt="Hinh">
    </div>
</body>

</html>
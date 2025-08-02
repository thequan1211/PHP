<?php
    //khai bao 1 array
    $studentList = ["Minh Tai", "Dang Khoa", "Manh Hung"];

    //array_push: them phan tu vao cuoi mang
    array_push($studentList, "Gia Bao");
    print_r($studentList);

    //array_unshift: them phan tu vao dau mang
    array_unshift($studentList, "Lam Phong");
    echo "<br>After unshift:    ";
    print_r($studentList);

    //array_pop: xoa phan tu cuoi mang
    array_pop($studentList);
    echo "<br>After pop:        ";
    print_r($studentList);

    //array_shift: xoa phan tu dau mang
    array_shift($studentList);
    echo "<br>After shift:      ";
    print_r($studentList);

    //array_splice: xoa phan tu bat ky trong mang
    //xoa 1 phan tu bat ky, bat dau tu vi tri 1
    array_splice($studentList, 1, 1);
    echo "<br>After splice:     ";
    print_r($studentList);

    $studentList = ["Minh Tai", "Dang Khoa", "Manh Hung", "Lam Phong"];
    //array_slice: lay mot phan cua mang
    $newList = array_slice($studentList, 2);
    echo "<br>After slice:      ";
    print_r($newList);

    //them 1 phan tu vao cuoi array
    $studentList[] = "Gia Bao";
    echo "<br>After adding:     ";
    print_r($studentList);

    //chuoi dinh dang file: abc.jpg, abc.jpeg, abc.png, abc.gif
    $fileName = "abc._3asd_3.jpg";
    //cat chuoi thanh mang
    $newName = explode(".", $fileName);
    echo "<br>";
    print_r($newName);
    //get phan tu cuoi cung
    $extension = end($newName);
    //khai bao 1 mang cac dinh dang file
    $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
    //kiem tra dinh dang file
    if(in_array($extension, $allowedExtensions)){
        echo "<br>File is valid: " . $fileName;
    } else {
        echo "<br>File is not valid: " . $fileName;
    }
?>
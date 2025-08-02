<?php
    //khai bao 1 array 1 chieu (numeric array/index array )
    $numbers = array(10, 11, 12, 13, 14);
    $numbers2 = [10, 11, 12, 13, 14];
    echo "<br>In theo print_r:";
    print_r($numbers);

    //for thuong
    echo "<br>In theo for thuong:";
    for($i = 0; $i < count($numbers); $i++) {
        echo "<br> $numbers[$i]";
    }
    //for each
    echo "<br>In theo for each:";
    foreach($numbers as $a) {
        echo "<br> $a";
    }

    //khai bao 1 ascociative array (key -> value)
    $student = [
        "name" => "Khoa",
        "age" => 29,
        "address" => "HCM"
    ];
    echo "<br>In theo print_r:";
    print_r($student);
    
    echo "<br>In theo for each:";
    foreach($student as $s) {
        echo "<br> $s";
    }

    echo"<br>Name: $student[name]";

    echo "<br>In theo for each key value:";
    foreach($student as $key => $value) {
        echo "<br> $key: $value";
    }
    echo "<br>In theo for each:";
    foreach($numbers as $i => $n) {
        echo "<br> $i: $n";
    }


    //khai bao 1 array nhieu chieu
    $studentList = [
        [
            "name" => "Khoa",
            "age" => 29,
            "address" => "HCM"
        ],
        [
            "name" => "Khanh",
            "age" => 30,
            "address" => "HN"
        ],
        [
            "name" => "Hanh",
            "age" => 28,
            "address" => "DN"
        ]
    ];
    echo "<br>In theo print_r:";
    print_r($studentList);

    echo "<br>In theo for each:";
    foreach($studentList as $i => $student) {
        $i++;
        echo "<br>" . $i . "." . $student['name'] . ":" . $student['age'] . ":" . $student['address'] . "<br>";
    }
    // for each trong for each
    echo "<br>In theo for each trong for each:";
    foreach($studentList as $i => $student) {
        $i++;
        echo "<br>" . $i . ".";
        foreach($student as $key => $value) {
            echo "<br> $key: $value";
        }
        echo "<br>";
    }

    //sort array
    asort($student);
    echo "<br>In theo sort:";
    print_r($student);  

?>
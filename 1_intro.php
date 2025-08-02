<?php
    //khai bao bien
    $name = "FPT Aptech";
    $age = 20;

    // in gia tri cac bien ra man hinh
    echo "Ten: " . $name . "<br>";
    print "Tuoi: " . $age . "<br>";

    echo "<br>Ten toi la $name";
    echo '<br>Ten toi la $name';

    //khai bao hang so
    define("MY_NAME", "FPT");
    const myname = "FPT";

    echo "<br>Ten toi la " . MY_NAME;

    echo "<br>Ban dang o line: " . __LINE__;
    echo "<br>Ban dang o file: " . __FILE__;
?>
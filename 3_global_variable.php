<?php
    $y = 10;
    //khai bao ham
    function myGlobal(){
        global $y; // khai bao bien toan cuc (global variable)
        $y += 5; // modify global variable
        echo "<br>Bien y co gia tri: $y"; // error, y is not defined in this scope
    }
    //goi ham
    myGlobal();
    //ngoai ham
    echo "<br>Bien y co gia tri: $y"; // this will work, y is defined in global scope
?>
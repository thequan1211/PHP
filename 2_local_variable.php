<?php
    //khai bao ham
    function myLocal(){
        //khai bao bien cuc bo (local variable)
        $x = 5;
        echo "<br>Bien x co gia tri: $x";
    }

    //goi ham
    myLocal();

    //in bien x o ngoai ham --> error
    echo "<br>Bien x co gia tri: $x";
?>
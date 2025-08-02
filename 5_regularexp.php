<?php
    $name = "FPT Aptech";

    $result = mb_ereg("^F\w+\s\w+$", $name);
    $result2 = mb_eregi("^f\w+\s\w+$", $name);
    echo "Result : $result";
    echo "<br>Result2 : $result2";

    $email = "fptaptech1999@gmai.com";
    $result3 = mb_ereg_replace("\d+", "2025", $email);
    echo "<br>Email after replace: $result3";

    //slpit : cat chuoi thanh mang
    $string = "FPT Aptech - 1234";
    $array = mb_split("-", $string);
    echo "<br>Array after split: ";
    print_r($array);   
    
    //PERL
    $result4 = preg_match("/^F\w+\s\w+$/i", $name);
    echo "<br>result4 is: $result4 ";

    $result5 = preg_match("/^f\w+\s\w+$/i", $name);
    echo "<br>result5 is: $result5 ";

    $newArr = preg_split("/\s/", $name);
    echo "<br>New array after preg_split: ";
    print_r($newArr);

    
?>
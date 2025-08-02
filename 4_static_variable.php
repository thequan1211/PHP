<?php
    function myFunction() {
        // Declare a static variable
        static $myStaticVar = 10;
        // Decrement the normal variable
        $normalVar = 10;

        $normalVar++;
        $myStaticVar++;

        echo "Normal variable value: " . $normalVar . "\n";
        echo "Static variable value: " . $myStaticVar . "\n";

        // Call the function again to see the effect of static variable
    }
    myFunction();
        myFunction();
        myFunction();
    
?>
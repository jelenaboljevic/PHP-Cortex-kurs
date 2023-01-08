<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>

    <h2>String Variable:</h2>
    
    <?php 

        $name = "Jelena";
        echo $name;

    ?>
    
    <h2>Integer Variable:</h2>

    <?php

    $version = 7.8;
    echo $version;
    
    ?>


    <h2>Print Variable from Function:</h2>

    <?php
        function add (){
            $firstvalue = "10";
            $secondvalue = "20";
            $total = $firstvalue + $secondvalue;
            echo $total;
        }
        echo add();
    ?>

    <?php
        function message(){
            $message = "Hello!!";
            echo $message;
        }
        echo message ();
    ?>

    <h2>Static Variable:</h2>

    <?php
        static $flag = 10;
        echo $flag;

    ?>

    <h2>Global Variable:</h2>

    <?php 
        global $name;
        $name = "Jelena";
        echo $GLOBALS["name"]; //Koristim super globals da bih printovala global variable

    ?>

    <h2>Super Global Variable:</h2>

    <?php
        $version = "7.8";
        echo $GLOBALS ["version"];
    ?>

    <h2>Variables of Variables:</h2>

    <?php
        $name = "Jelena";
        $student = "name";
        echo "Students name is ${$student}";


    ?>

</body>
</html>


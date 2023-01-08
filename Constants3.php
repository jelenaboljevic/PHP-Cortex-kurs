<?php


//Same name with Variable and Constant


define ("LANGUAGE","PHP");

$LANGUAGE = "JAVA";
echo "This program is written using $LANGUAGE <br>"; //Printovano je putem varijable
echo "This program is written using " . LANGUAGE . "<br>"; //Printovano pomocu konstante

//Ime varijable i konstanti moze biti isto program ce ih razlikovati!
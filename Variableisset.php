<?php

	//Empty Variable

$name;
echo $name;


//Ternary operator
echo isset($name) ? "Variable Set" : "Variable is not set";

$name = "John Smith";
echo isset($name) ? "Variable Set" : "Variable is not set";


$firstname = "Test";
$name = $firstname;
echo isset($name) ? "Variable Set" : "Variable is not set";

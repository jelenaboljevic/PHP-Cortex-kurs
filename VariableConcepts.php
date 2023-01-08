<?php


	//Define a variable

$name= "John";

	//Variables can be used as String or Itiger

	$message = 1;
	$message = "PHP is interesanting";
	echo $message . "<br>";

	//Print variables with double quotes

	echo "Name variable = $name" . "<br>";
	echo 'Name variable = $name' . "<br>";

	//Variable typing converting string to intiger and vice versa

	$lenght = "10";
	$breath = 20;
	$area = $lenght * $breath;
	echo "Area: $area" . "<br>";

	//Variable is case sensitive

	$Name = "Warner";
	echo "$name is not equal to $Name" . "<br>";

	//Variable scope

	$counter = 1;
	function show_counter(){
			$counter = 2;
			echo $counter;

	}
	show_counter ();
	echo $counter . "<br>";

	//Global variables
    
    global $count;
    $count = 1;
	function show_count(){
			global $count;
			$count = 2;
			echo $count . "<br>";

	}
	show_count ();
	echo $count . "<br>";

	//Static Variable
	function counter_static (){
		static $count = 1;
		echo $count . "<br>";
		$count = $count +1;
	}
	counter_static ();
	counter_static ();
	counter_static ();

	//Predifined variables

	function print_global_variables(){
		echo $GLOBALS ['count'] . "<br>";

	}
	print_global_variables();




	//Variables of variables

	$countofcount = "count";
	echo $$countofcount;

	//isset function 
	echo isset ($$countofcount) ? "Variable is set" : "Variable is not set";
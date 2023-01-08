<?php 

		//Sample 1

		global $message;
		$message = "Welcome!";
		echo $GLOBALS ['message'] . "<br>"; 
		// Sample 2

		echo "Filename" . $_SERVER ["PHP_SELF"];
	
			//Sample 3
		global $name;
		$name = "John Smith";

		function print_name(){

				echo $GLOBALS ["name"];

		}

		print_name();
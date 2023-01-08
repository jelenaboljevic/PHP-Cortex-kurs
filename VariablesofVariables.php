<?php 


	$male = "John Smith";
	$gender = "male";

	echo $gender;
	echo $$gender; // $($gender) ==> $(male)


	echo "<br>";
	$student = "John Smith";
	$male = "student";
	$gender = "male";


	echo "<br>";

	
	echo $$$gender;
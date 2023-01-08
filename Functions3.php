<?php

	//Sample 1
	//Definea function
	//Function declaration
	
	function add(){
		$firstvalue = 10;
		$secondvalue = 20;
		$total = $firstvalue + $secondvalue;
		echo "$total<br>";

}
	
	//Calling the function
	add();

	//Sample 2
	/*

	function add (){

		echo 'Duplicate function';
	}
	*/

	// Sample 3
	//Mozes i prvo da pozoves funkciju pa da je definises

	welcome_message ();
	function welcome_message(){
		echo 'Welcome to PHP Functions!';
	}
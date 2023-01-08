<?php

//Sample 1
//Prvo ce biti printovano ovo PHP jer se nalazi pod function (ono sto je u funkciji ce biti executovano prvo)

$name = 'Jelena!';

function print_name (){

	$name = "PHP!";
	echo $name;
}

print_name ();
echo $name;

//Sample 2

$message = "Welcome to PHP!";
function print_message(){
	echo $message;

}
print_message();
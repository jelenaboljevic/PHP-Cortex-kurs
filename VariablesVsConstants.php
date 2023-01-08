<?php


/* Razlike koje smo do sada vidjeli
	
	1) No need to use $ to use the constant
	2)  Constants are defined only with define method
	3)  Value can be assigned only ONCE
	4)  Constant has global scope. Can access anywhere
	5)  Constant can be used to access the constants

*/

$name = "John Smith"; //definisem varijablu
define ("name","John Smith"); //definisem constantu
echo $name . name;


//Able to change variable but not constant

$name = "Tobias Eaton";
//define ("name", "Tobias Eaton");
echo $name . name;

echo "<hr>";
//Mijenja se u varijabli ali ne constanta


//Global scope


function print_constant(){
	echo $name . name;
}
print_constant(); 

//Constanta je printovana a varijabla ne
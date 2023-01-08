<?php 

	//Define constant sample 1

	define ("LANGUAGE","PHP");
	$lang = LANGUAGE;
	echo "This program is written using $lang <br>"; //Printovala sam ga koristeci varijablu
	echo "This program is written using LANGUAGE <br>"; //Potvrdjujem da ne moze da se printuje konstanta jer se LANGUAGE nalazi unutar stringa
	echo "This program is written using" . LANGUAGE . "<br>"; //Ovdje vec moze jer je LANGUAGE odnosno konstanta van stringa

	
<?php 

	//constant in php is when we cant not change the vlaue of const variable...
	//constant variable is declare with const keyword.....
	//const keyword is case senstive...........
	//we call the const variable through scope resoulution operator :: plues const name..
	//and we call const inside the method using self::const_name..........

//eg of the constant in php..............

	class Some{

		const HELLO_WORLD = "this is calling the const outside the class using scope resulution opearator";
		const SECOND = "this is const which we are calling inside the class using self keyword";

		function inside(){
			echo self::SECOND;
		}
	}

	echo Some::HELLO_WORLD;
	echo "<br>";
	$some = new Some();
	$some->inside();

	/* 

		Constants cannot be changed once it is declared.

		Class constants can be useful if you need to define some constant data within a class.

		A class constant is declared inside a class with the const keyword.

		Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

		We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:


	*/ 


?>
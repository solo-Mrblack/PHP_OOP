<?php 

/* 
.in php we cannot inherit multiple classes but trait make it easy..By creating trait class we can inherit a class all methods and properties..

.in interface when we implemets in other class it is mendadotory to use all the method but in trait it is up to you...
*/

#for eg...

	trait one{

		function fun(){
			echo "oop in php is fun";
		}
	}

	trait three{
		function fun2(){
			echo "this is second message";
		}
	}
	trait four{
		function fun3(){

			echo "and this is also last message oop is fun";
		}
	}

	class two{

		use one,three,four;

	}


	$obj = new two();

	$obj->fun();
	echo "<br>";
	$obj->fun2();
	echo "<br>";
	$obj->fun3();
	echo "<br>";


	//one more eg....

	trait five{

		function fun5(){
			echo "this is method five";
		}
	}

	trait six{
		function fun6(){
			echo "this is method six";
		}
	}
	trait seven{
		function fun7(){
			echo "this is method seven";
		}
	}

	class example{
		use five,six,seven;
	}

	class example2 extends example{


	}
	$obj1 = new example2();
	$obj1->fun7();

?>
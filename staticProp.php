<?php 

	//static properties can be called directly without calling the instancae of the claass..
	//to call static properties we use calssname , :: scop resoultion operator and the prperty name...


	//for eg.............


	class Pi{

		public static $value = 3.14 ;
	}

	echo Pi :: $value;//this is the simple way to echo static properties..


	//calling static properties withing the function............

	class A{

		public static $hello = "this is some text..";

		public function fun(){

			return A::$hello;
		}
	}

	$obj = new A;
	echo "<br>";
	echo $obj->fun();


	//to use staic properties inside the child class use the parent keyword in child class......
	#for eg..

	class Some{

		public static $var  = "this is some staic text";
	}

	class Thing extends Some{

		public function fun3(){

			return Some::$var;
		}
	}

	echo Thing::$var;//now sttic is aslo in this class.......or we can say this class can call the static variable directly cause Thing is extendign Some...

	//or we can also call the variable by using obj of Thing class..........

	$obj1 = new Thing();
	echo "<br>";
	echo $obj1->fun3();



?>
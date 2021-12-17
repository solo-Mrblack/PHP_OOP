<?php

	//abstract class is when parent class have just method in it but not declare....

	//abstract class must have abstract keyword included ...

	//when child class extend the abstract class must have the same method name and same agrument but not the less agrument but can add additonal aggrument from their side

	//if a abstract class has protected function then child class can extend class must chave the protected or public class not the private......

	#for eg.....
	
	abstract class World{

		public $name;

		function __construct($n){

			$this->name = $n;
		}

		abstract public function getName();

	}

	class B extends World{

		public function getName(){

			echo   "this is my name : $this->name";

		}

	}



	$obj = new B('hello world');
	$obj->getName();


echo "<br>";

	//one more eg...................................................

	abstract class Car{

		public $name;

		function __construct($a){
			$this->name = $a;
		}

		abstract public function intro();
	}

	class Carone extends Car{

		public function intro(){
			echo "the car name is $this->name";
		}
	}

	class Cartwo extends Car{

		public function intro(){
			echo "<br>";
			echo "the car name is $this->name";
		}
	}

	$objOne =  new Carone('carone');
	$objOne->intro();

	$objTwo = new Cartwo('cartwo');
	$objTwo->intro();




	//one more example................


	abstract class First{

		//mwthods with agrument.........

		abstract public function Prefix($name);
		
	}

	class Okay extends First{

		public function Prefix($name ,$sep="."){

			if($name == 'john Doe'){
				$Prefix = 'Mr';
			}elseif ($name == 'jane Doe') {
				$Prefix = 'Mrs';
			}else{
				$Prefix = '';
			}

			return "{$Prefix}{$sep}{$name}";
		}
	}

	$obj5 = new Okay("johnDoe");
	$obj5->Prefix('hello');

 ?>
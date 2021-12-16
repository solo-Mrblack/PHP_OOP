<?php
	
	//creating class by class keyword with curly brackets........

	class Fruit{

		//the properties in class or varibales......

		public $name ;
		public $color;

		//the methods in php ................


		function set_naem($abc){
			//this keyword is only available inside the function and refer to the currunt object.............
			$this->name = $abc;
		}
		function set_color($color){
			$this->color = $color;
		}

		function get_name(){
			print $this->name;
		}
		function get_color(){
			echo $this->color;
		}
	}

	//no limt of creating a object but one object can only get the one variable value at time.....................

	$First = new Fruit();
	$First->set_naem('apple');
	$second = new Fruit();
	$second->set_naem('mango');
	$second->set_color('yellow');
	
	echo $second->get_name();
	echo "<br>";
	echo $second->get_color();

	//$First->get_name();





	/*
	so we have two ways to change the value or properties...
	

	1> first is we can change properties inside the method using $this keyword like......

		class fruit{
			public $name ;

			funtion set_name($name){
				$this->name = $name;
			}
		}

	$firstUser = new fruit();

	$firstUser->set_name('Mr.somone');//this is fisrt wat by using this keyword....


	2> second way is using changing the properties outside the calss....


		class Fruit(){
			
			$name;
		}
		$user  = new $Fruit();
		$user->name  = 'Mr.someone';

		echo $user->name;



	*/

		//second method example.................

	echo "<br>";

		class Shop{
			public $name;
		}
		$user  = new Shop();
		$user->name = 'Hello';
		echo $user->name;

		echo "<br>";
		//instanceof keyword is used to check a object is instance of class or not

		var_dump($First instanceof Shop);//return false cause First is not object of Shop

 ?>

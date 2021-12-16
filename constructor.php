<?php 

/* 
	
	.construct is a keyword and when we call a fucntion variable we are clling a constructor ...
	.construct is used by double underscore like __construct()...		
	.lets see an example where construct is reduce the line of code.....
	
*/ 

	class Some{
		//decarign properties....

		public $name;
		public $age;

		//creating methods .........

		function __construct($name){

			$this->name = $name;

		}
		function get_name(){
			echo $this->name;
		}
	}

	$firstUSer = new Some('mr.smith');//we dirctelly set the name in class cause const..
	//here we reduce the line set_naem code by using construc over method..........
	$firstUSer->get_name();

	//constructor is used to create a object.........
	//some more example of construct how it reduce line of code is below......


	class Hello{

		public $naem;
		public $age;
		public $country;
			

		function __construct($name ,$age ,$country){

			$this->naem = $name ;
			$this->age = $age;
			$this->country = $country;

		}
		function get_name(){
			echo $this->naem;
			echo "<br>";
		}
		function get_age(){
			echo $this->age;
			echo "<br>";
		}
		function get_country(){
			echo $this->country;
		}
	}

	$userTwo = new Hello('mr.hello' , 50 , 'America');
	$userTwo->get_name();
	$userTwo->get_age();
	$userTwo->get_country();


	//destruct is callled auttomatically by the php.......


	class Glass{

		public $name;
		public $color;
	

		function __destruct(){
			echo "this is execute at the end of code";
		}
		
		function __construct($name , $color){
			$this->name = $name;
			$this->color = $color;
		}
		function getName(){
			echo $this->name;
			echo "<br>";
		}
		function getColr(){
			$this->color;
			echo "<br>";
		}
	}

	$objONe = new Glass('mr.xyz','yello');
	$objONe->getName();
	$objONe->getName();

?>
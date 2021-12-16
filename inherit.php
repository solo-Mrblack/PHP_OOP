<?php

//When a child class can access all the proprties and method of the parent class is INHERITENCE............
//we sue "extends" key word to inherit a class............

	//for eg....

	class A{
		public $name ;
		public $age ;

		function setName($n){
			$this->name = $n;
		}
		function setAge($a){

			$this->age = $a;
		}

		function getName(){
			echo $this->name;
		}
		function getAge(){
			echo $this->age;
		}
	}

	class B extends A{

		function print(){
			echo "print hello world";
		}
	}

	$obj = new B();
	
	
	$obj->setName('Mr.abc and this is class A');
	$obj->getName();
	echo "<br>";
	$obj->print();



	// Overriding Inherited Methods..............


	class Some{

		public $name;
		public $age;

		function __construct($n , $a){
			$this->name = $n;
			$this->age = $a;
		}

		function getNm(){
			$this->name;
		}
		function getAg(){
			$this->age;
		}
	}

	class Thing extends Some{

		public $country;


		function __construct($n ,$m,$o){
			$this->name = $n;
			$this->age = $m;
			$this->country = $o;
		}

		function getDetails(){
			echo "name is : {$this->name} , age is: {$this->age} and country is: {$this->country}";
		}

	}

	$obj5 = new Thing('helllo',20,'india');
	$obj5->getDetails();


		//and we can prevent to overwrite a method by using final keyword...


	final class employe{ //it will give error due to final keyword......
		function fun(){
			echo "this is class employe..";
		}
		
	}
	class another extends employe{
		function fun(){
			echo "this is class another";
		}
	}

	$obj4 = new another();
	$obj4->fun();


 ?>
<?php 

	//when child class have the same method name of the parent class with diffrent arguent is known as overloading...........


#for eg..........

	class Arithmetic{

		public $firstnum ;
		public $secondnum;

		public function __construct($fnum , $snum){
			$this->firstnum = $fnum;
			$this->secondnum = $snum;
			
		}
		public function fun(){
			echo $this->firstnum + $this->secondnum;
		}
	}

	class B extends Arithmetic{

		public $one;
		public $two;
		public $three;
		
		public function __construct($o,$t){

			$this->one = $o;
			$this->two = $t;

		}
		public function fun(){
			echo $this->one - $this->two;
		}


	}
	$obj2 = new Arithmetic(50,60);
	$obj2->fun();
	echo "<br>";
	$obj = new B(50,30);
	$obj->fun();



	//overloading ..............

/*
	class Overlaoding{


		public function res($first ,$second ,$third){

			echo $first + $second + $third;
		}

		public function res($first,$second){// you cannot overload in php...
			echo $first + $second ;
		}
	}

	$obj = new Overlaoding;
	echo "<br>";
	$obj->res(155,11);*/

	//by using call method we can overload a method in php........

	class Shape {
        const PI = 3.142 ;
        function __call($name,$arg){//we can use call method to acheive overloading ...
	        if($name == 'area'){
	            switch(count($arg)){
	               case 0 : return 0 ;
	               case 1 : return self::PI * $arg[0] ;
	               case 2 : return $arg[0] * $arg[1];
	               case 3 : echo $arg[0]+$arg[1]+$arg[2];
	            }
	        }
        }
    }
   echo "<br>";
   $circle = new Shape();
   echo $circle->area(3);//same method name........
     echo "<br>";
   $rect = new Shape();
   echo $rect->area(8,6);//same method name but diffrent argumnet.......


   echo "<br>";
   $add = new Shape;
   $add->area(10,6,5);
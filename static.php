<?php 

	/*
	#Static method......
	.static methods are those methods which are not instanceof a class.....
	.they are called directly.........
	.static method are declare with static method..........
	.they are called with(::)this sign = scope resolution operator....
	.if want call the static method outside the class then we will use classname::staticmethod();
	.if we want to call it inside the funciton then we use self keyword to call the satatic function = self::staticmethod();
	.if a derived class want to access the static method then we have to use parent keyword = parent::staticmethodname();
	*/

	//calling static outside the class...

	class A{

		public static function fun1(){
			echo "this is fun one";
		}
	}
	A::fun1(); //calling function outside the class............



	//calling funciton insdie the class...........

	class Fruits{

		public static function fun3(){
			echo "this is fun3";
		}

		public function __construct(){

			self::fun3();//calling funciton isnide the class using self keyword....
		}
	}

	new Fruits();


	//calling function outside the class....................

	class Some{

		public static function funfun(){

			echo "this is class  fun fun";
		}
	}

	class Somthing{

		public function message(){

			Some::funfun();//calling statica method outside the class...........
		}
	}

	$objjj = new Somthing();
	$objjj->message();



//calling function outside the clas by using parent keyword......


	/*class Spider{

		protected static function fun6(){

			return "this is fun6 and class is spidre but is claling from another class";
		}
	}

	class SpiderTwo extends Spider{


		public $newvariable ;

		public function __construct() {

			$this -> $newvariable = parent::fun6();
		}
	}

	$SpiderTwo = new SpiderTwo;
	echo $SpiderTwo->newvariable;*/


class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;



//use of static method in php..............


class onnn{

	public function some($ok = "this is not static" ){

		echo $this->ok =$ok;


	}
}

class twoo{

	public static function okka($no){

		echo $no = "this is static we cannot change it";
	}
}

$objk = new onnn();
echo "<br>";
$objk->some('i can change it');
echo "<br>";


twoo::okka('you cannot change the value');//this argument cant overwrite thr no variable since no varaible of staic function





//


class hello{

	public static function world(){

		echo "this is hello world class...";
	} 
}

class B extends hello{

	public $name;

	public function __construct(){

		$this->name = parent::world();
	}
}

$B = new B;
$B->name;

?>
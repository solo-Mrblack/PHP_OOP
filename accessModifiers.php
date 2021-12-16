<?php 

//access modifier........................
/* 

we have three tyow if access modifier..........
access modifiers is used to control over the data who can access the data or not.........

the type of access modifiers........
1>public:-anyone can access the data form outside the class using obj...
2>protected:- it can be only accessed within the class and  extended class...
3>private:- methods and properties can be accessed only within the class....

*/


class Modifier{

	public $name ;
	public $color;
	public $age;

	public function set_name($n){
		$this->name = $n;
	}
	protected function set_color($c){
		$this->color = $c;
	}
	private function set_age($a){
		$this->age = $a;
	}

	function get_name(){
		echo $this->name;
		echo "<br>";
	}
	function get_color(){
		echo $this->color;
		echo "<br>";
	}
	function get_age(){
		echo $this->color;
		echo "<br>";	
	}



}

$obj1 = new Modifier();
$obj1->set_name('hello');
$obj1->get_name();

//$obj1->set_age(20);it will give error and also set_color too..........
//$obj1->set_color(20);it will give error and also set_color too..........



?>
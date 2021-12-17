<?php 

	/*

	.interface :- it is same as polymorphism....if a class want to extnd multiple method from multiple class in that case interface is best option..

	.interface class is delcared with interface keyword and no need to write class keyword....

	=>diff between abstract and interfaces..........
	.interfaces must have only public method and the are absracte by default no need to write abstract in fort of interfaces classes while abstract class can have public or protected method.......
	.abstract method can have properties while interfaces not have methods only........


	*/

	//for eg.....


	interface Speak{
		
		public function sound();

	}
	interface  Language{
		 public function Speak();
	}
	class cat implements Speak , Language{

		public function sound(){
			echo " meo";
		}
		public function Speak(){
			echo "and this speak abc";
		}
		
	}
	$obj = new cat();
	$obj->sound();
	$obj->Speak();
	


?>
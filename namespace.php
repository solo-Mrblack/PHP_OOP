<?php 
	
	
	//namespace :- The group of class who work togother to perfome a task for grouping these type of class namespace is better option........

	//they allow to use same name more than than one time for the same class.......
	//namspace should be decalre at the top......
	/* 
		
		for eg...

		<?php 

		echo "hello world";
		namespace html; //then this is invalid syntax.........

		?>
	
	*/

		#eg of namespace ..........


		namespace Html;

		class table{

			public $table = "";
			public $roe = 0;

			public function message(){

				echo "the {$this->table} has {$this->roe} ";
			}
		}
		$obj = new table;
		$obj->table = "my table";
		$obj->roe = 5;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table</title>
</head>
<body>

<?= $obj->message();  ?>

</body>
</html>


<?php 

#Iterable ....

//any value which can be looped thorugh foreach loop in iterable......
//using iterable we have to decalre our vaiarbel as iterable.
//for eg..

function firstIterable(iterable $thevalue){

	foreach($thevalue as $val){
		echo "$val";
		echo "<br>";
	}
}

$arr = ['a' ,'B' , 50];
firstIterable($arr);


//return an iterable........


function returnIterable():iterable{

	return ['a','b','c'];
}

$firstIte = returnIterable();
foreach($firstIte as $val){
	echo $val;
}

?>
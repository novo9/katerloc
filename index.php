<?php

class Bike{
	
	public function __destruct(){
		echo "Bye!";
		
	}
}


$a = new Bike;
$a->name = "Mike";
echo $a->name;
unset($a);


?>
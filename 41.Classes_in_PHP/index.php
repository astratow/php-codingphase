<?php
	
	/**
	 * 
	 */
	class Car
	{	
		public $doors = 4;
		
		public function __construct($name, $doors=4, $color="Black")
		{
			$this->doors = $doors;
			$this->color = $color;
			$this->name = $name;

			// echo 'This has just got triggered';
		}
		public function print_name(){
			echo $this->name;
		}
		public function statement(){
			echo "<h1>This car is a  {$this->name} and it has {$this->doors} doors. The color is {$this->color}.</h1>";
		}
	}

	$honda = new Car('Honda Civic'); //in original there is just Civic and color is not capital
	$GreenHonda = new Car("Honda Civic", 2, "Green"); // in original is just Civic
	$BMW = new Car("BMW M6", 4, "Space Grey");// in original it's just M6 without BMW
	

	$honda->statement();
	$GreenHonda->statement();
	$BMW->statement();
	// $honda->print_name();
	// echo $this->name;
	// echo $honda->doors = 2;
	// echo "<pre>" . var_dump($honda) . "</pre>";

?>
<!DOCTYPE html5>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <!-- <h1> hello world
 </h1> -->
 <p>
	</p>
</body>
</html>
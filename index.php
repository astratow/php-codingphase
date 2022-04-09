<?php
	
	/**
	 * 
	 */
	class Car
	{	
		public $doors = 4;
		
		public function __construct($name)
		{
			$this->doors = 2;
			$this->name = $name;

			// echo 'This has just got triggered';
		}
		public function print_name(){
			echo $this->name;
		}
	}

	$honda = new Car('Civic');
	
	$honda->print_name();
	// echo $this->name;
	echo $honda->doors = 2;
	echo "<pre>" . var_dump($honda) . "</pre>";

?>
<!DOCTYPE html5>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <h1> hello world
 </h1>
 <p><?php 

	echo $honda->doors = 2;
	echo "<pre>" . var_dump($honda) . "</pre>";
?>
	</p>
</body>
</html>
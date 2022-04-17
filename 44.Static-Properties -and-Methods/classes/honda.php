<?php
	require_once("car.php");
	class Honda extends Car{

		public $company = "Honda";


		public function __construct($name, $doors, $color, $price){
			$this->name = $name;
			$this->doors = $doors;
			$this->color = $color;
			$this->price = $price;
		}

		public function price(){
			echo "<h1>The price for this {$this->company} {$this->name} is $ {$this->price}.</h1>";
		}
	}
?>
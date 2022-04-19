<!-- BMW.php -->
<?php
	require_once("car.php");
	class BMW extends Car{

		public $company = "BMW";


		public function __construct($name, $doors, $color, $price, Inventory $inventory){
			$this->name = $name;
			$this->doors = $doors;
			$this->color = $color;
			$this->price = $price;
		}

		public function price(){
			echo "The price for this {$this->company} {$this->name} is $ {$this->price}.";
			echo $this->inventory->carTotal($this->company);
		}
	}
?>
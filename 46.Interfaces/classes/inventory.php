<?php
	require_once("car.php");

	interface InventoryInterface{
		public function carsSold();
	}
	class Inventory implements InventoryInterface{


		// public function __construct(){
			
		// }

		public function carTotal($company, $numberOfCars = 1){
			$companies = [
                "BMW" =>  240,
                "Honda" => 177,
            ];
			$totalAfter = $companies[$company] - $numberOfCars;
            // return $companies[$company];
			return "{$totalAfter} Total of cars left after purchase. ";
		}
		public function carsSold()
		{
			echo "<h2>Today we sold {$numberOfCars}. </h2>";
		}
	}
?>
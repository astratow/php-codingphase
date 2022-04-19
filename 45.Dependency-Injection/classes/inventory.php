<?php
	require_once("car.php");
	class Inventory{


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
	}
?>
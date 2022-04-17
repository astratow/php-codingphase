<?php
	class Car{
		public $doors = 4;
		public $color = "Black";
		private $location = "Northern Blvd";
		public static $city = "Queens, NY";

		public function statement(){
			echo "{$this->company} {$this->name} has {$this->doors} and the color is {$this->color}.";
		}

		public static function city(){
			return "Queens, NY";
		}

		public static $states = [
			"NY",
			"FL",
			"AL",
			"TX",
			"KJ",
		];

		public static function states(){
			foreach(self::$states as $state){
				echo "<h1>{$state}</h1>";
			}
		}
		private function store(){
			echo "Sold at {$this->location} Dealership";
		}
	}
?>
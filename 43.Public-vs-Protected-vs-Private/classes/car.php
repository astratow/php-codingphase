<?php
	class Car{
		public $doors = 4;
		public $color = "Black";
		private $location = "Northern Blvd";
		
		public function statement(){
			echo "<h1>{$this->company} {$this->name} has {$this->doors} and the color is {$this->color}. </h1>";
			$this->store();
		}
		private function store(){
			echo "Sold at {$this->location} Dealership";
		}
	}
?>
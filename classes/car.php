<?php
	class Car{
		public $doors = 4;
		public $color = "Black";
		

		public function statement(){
			echo "{$this->company} {$this->name} has {$this->doors} and the color is {$this->color}.";
		}
	}
?>
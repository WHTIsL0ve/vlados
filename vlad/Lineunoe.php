<?php
namespace vlad; 
class Lineunoe { 
	protected $x;
	
	public function GetX() {
		return $this->x;
	}
	public function yr ($a, $b){
		if ($a == 0){
			return $this -> x = false;
		}
		return $this -> x = array(-$b/$a);
	}
}
?>
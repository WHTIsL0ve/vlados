<?php
namespace vlad;
class Kvadrat extends Lineunoe implements \core\EquationInterface {
	protected $dis;
	protected function dcrm($a1, $b1, $c1){
		$dis = ($b1 * $b1) - (4 * $a1 * $c1);
		return $this -> dis = $dis;
	}
	function solve ($a1, $b1, $c1){
		if ($a1 == 0){
			return $this -> yr($b1, $c1);
		}
		
		$this -> dcrm($a1, $b1, $c1);
		
		if ($this -> dis == 0){
			return $this -> x = array(-$b1/(2 * $a1));
		}
		
		if ($this -> dis < 0){
			return $this -> x = false;
		}
			
		$x1 = (-1 * $b1 + sqrt($this -> dis)) / 2 *$a1;
		$x2 = (-1 * $b1 - sqrt($this -> dis)) / 2 *$a1;
		$this -> x[] = $x1;
		$this -> x[] = $x2;
		return $this -> x;
		}

    public function vlad($a, $b, $c)
    {
        // TODO: Implement vlad() method.
    }
}
?>
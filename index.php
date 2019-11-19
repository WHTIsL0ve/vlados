<?php
class C 
{
	protected $X;
	function vrot($a,$b){
		if ($a == 0) {
			return false;
		}
		$X = (-1 * $b) / $a;
		return $this -> X = $X;
	}

}
class B extends C
{
	protected $x = [];
	function vlad($a1,$b1,$c1){
		if ($a1 == 0) {
			$x1 = $this -> vrot($b1,$c1);
			return $this -> x = array_push($x , $x1);
		}
		$dis = $b1 * $b1 - 4 * $a1 * $c1;
		if ($dis == 0 ) {
			$x1 = (-1 * $b1) / 2 * $a1;
			return $this -> x = array_push($x , $x1);
		}
		if ($dis < 0 ){
			return false;
		}
		
		$x1 = (-1 * $b1 + sqrt($dis)) / 2 * $a1;
		$x2 = (-1 * $b1 - sqrt($dis)) / 2 * $a1;
		 $this -> x = array_push($x , $x1);
		 $this -> x = array_push($x , $x2);
	}
}
Class A extends B
{
	public $q;
	public $f;
	function __construct($roor,$toot,$lool)
	{
		parent::__construct($roor);
		$this->f = $toot;
		$this->t = $lool;
	}
}
$ob = new C();
$ob1 = new C();
$ob2 = new C();
$ob3 = new B($ob2);
$ob4 = new A ($ob3,$ob1,$ob);
var_dump($ob4);
$ob5 = new B ();
$ob5->vlad(1,2,8);
?>


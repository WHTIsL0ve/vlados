php
class C 
{
}
class B extends C
{
	public $r;
	function __construct($kil)
	{
		$this->r=$kil;
	}
}
Class A extends B
{
	public $q;
	public $f;
	function __construct($roor,$toot,$lool)
	{
		parent::__construct($roor);
		$this->f=$toot;
		$this->t = $lool;
	}
}
$ob = new C();
$ob1 = new C();
$ob2 = new C();
$ob3 = new B($ob2);
$ob4 = new A ($ob3,$ob1,$ob);

var_dump($ob4);
?>


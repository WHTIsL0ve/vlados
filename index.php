<?php
namespace vlad;

ini_set('display errors',1);
error_REPORTING(-1);



include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('vlad/Lineunoe.php');
include_once('vlad/Kvadrat.php');
include_once('vlad/Log.php');


echo "Please enter 3 parameters divided by space. \n";
$params = explode(" ", fgets(STDIN));

try {
	if (count($params) != 3) {
		throw new Burmantov("Wrong parameter count. Please enter exactly 3 parameters.");
	}
	$a = (float)$params[0];
	$b = (float)$params[1];
	$c = (float)$params[2];
	if ($params[0] == 0) {
		Log::log("Linear equation: ".$b."x + ".$c." = 0");
		$Lineunoe = new Lineunoe();
		Log::log("Answer: ".$Lineunoe->yr($a, $b));	
	}
	else {
		Log::log("Square equation: ".$a."x^2 + ".$b."x + ".$c." = 0");
		$Kvadrat = new Kvadrat();
		if (is_array($temp = $Kvadrat->solve($a, $b, $c))) {
			Log::log("Answer: ". implode(" , ", $temp));
		}
		else {
			Log::log("Answer: ".$temp);
		}
		
	}	
}
catch (Burmantov $e){
	Log::log($e->GetMessage());
}

Log::write()."\n";
?>
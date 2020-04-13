include_once('vlad/Log.php');


echo "Ââåäèòå 3 ÷èñëà. \n";
$paramens = explode(" ", fgets(STDIN));

try {
	if (count($paramens) != 3) {
		throw new Exception("Âû ââåëè íå 3 ÷èñëà. Ïîïðîáóéòå ñíîâà");
	}
	$a = (float)$paramens[0];
	$b = (float)$paramens[1];
	$c = (float)$paramens[2];
	if ($paramens[0] == 0) {
		Log::log("Linear equation: ".$b."x + ".$c." = 0");
		$linear = new Linear();
		Log::log("Answer: ".$linear->llinear($b, $c));	
	}
	else {
		Log::log("Square equation: ".$a."x^2 + ".$b."x + ".$c." = 0");
		$square = new Square();
		if (is_array($temp = $square->solve($a, $b, $c))) {
			Log::log("Answer: ". implode(" , ", $temp));
		}
		else {
			Log::log("Answer: ".$temp);
		}

	}	
}
catch (Exception $e){
	Log::log($e->GetMessage());
}
Log::write()."\n";

?> 
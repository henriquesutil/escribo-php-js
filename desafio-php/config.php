<?php 
	function somaTotalInteiros($num){
		$soma = 0;
		for ($x=1; $x < $num ; $x++) { 
			if ($x % 3 == 0 || $x % 3 == 3 || $x % 5 == 0 || $x % 5 == 5) {
				$soma = $soma + $x;
			}
		}
		return $soma;
	}
?>
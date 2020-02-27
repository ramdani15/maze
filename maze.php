<?php
	$n = readline("S: ");
	$character = "@";
	$in = True;

	// print character
	function print_character($n, $character){
		for($j=1; $j<$n; $j++){
			echo $character;
		}
	}

	for ($i=0; $i<$n; $i++){
		echo $character;

		if ($i % 2 != 0) { // space
			echo " ";
			for($j=1; $j<$n; $j++){
				echo " ";
			}
		} else { // maze
			if ($in) { // check enter
				echo " ";
				print_character($n, $character);
			} else {
				print_character($n, $character);
				echo " ";
			}
			$in = !$in;
		}
		echo $character;
		echo "\n";
	}
?>
<?php 
	$title = "Functions";
	include 'includes/header.php' 
?>

	<h1> FUNCTION Statement </h1>

	<?php

		//Defining Function
		function message() {
			echo "This is a Message <br>";
		}

		//Calling a function
		message();

		//Defining Integer function
		function addnum($num1, $num2) {
			$sum = $num1 + $num2;
			echo "Addition of ".$num1." and ".$num2." is: ".$sum. " <br>";
		}

		function changenum(&$num) {
			$num = $num + 100;
		}

		function returnprod($num1, $num2) {
			$prod = $num1 * $num2;
			return $prod;
		}

		$num = 500;
		addnum(10, 20);
		addnum(10, $num);
		addnum("10", "50");

		changenum($num);
		echo $num. "<br>";

		$ans = returnprod(10, 200);
		echo $ans. "<br>";

	?>
<?php require 'includes/footer.php' ?>
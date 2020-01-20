<?php 
	$title = "Arrays";
	include 'includes/header.php' 
?>

	<h1> ARRAY Statement </h1>

	<?php

		$grade = array(10, 20, 30, 11, 47, 56, 84, 32, 25, 89, 75, 19, 88, 77, 34, 48, 51, 81, 135, 7985);

		echo "<p> ".$grade[6]. "</p>";
		echo "<p> ".$grade[16]. "</p>";

		$size = count($grade);

		for ($i=0; $i < $size; $i++)
		{
			echo "<p> Array[ ".$i." ] = ".$grade[$i]." </p>";
		}

		echo "<p> Size of Array is ".$size. " </p>";

	?>
<?php require 'includes/footer.php' ?>
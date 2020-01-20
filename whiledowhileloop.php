<?php 
	$title = "Do-While Loop";
	include 'includes/header.php' 
?>

	<h1> WHILE LOOP </h1>

	<?php

		$i=0;

		while ($i < 10) {
			echo "<p> I am in 'Do-While loop' </p>";
			$i++;
		}

		echo "<p> I am  not able to iterate inside while loop because the value of 'i' is ".$i." . </p>";

	?>

	<h1> DO-WHILE </h1>

	<?php

		do {
			echo "Though the value of 'i' is ".$i. " but I am execute at once because I am in the 'Do-While Loop' ";
		}
		while ($i < 10);

	?>

<?php require 'includes/footer.php' ?>
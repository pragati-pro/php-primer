<?php 
	$title = "For Loop";
	include 'includes/header.php' 
?>

	<h1> FOR LOOP </h1>

	<?php

		for ($i=0; $i < 10; $i++)
		{
			echo "<p> I am in 'for loop' </p>";
		}

		echo "I am iterating ".$i." times i.e. from 0 to 9.";

	?>
<?php require 'includes/footer.php' ?>
<?php 
	$title = "Switch Statement";
	include 'includes/header.php' 
?>

	<h1> SWITCH Statement </h1>

	<?php

		$grade = 'B';

		switch ($grade) {
			case 'A':
				echo '<h3 style="color: green"> YOU PASSED IN FIRST CLASS </h3>';
				break;

			case 'B':
				echo '<h3 style="color: blue"> YOU PASSED IN SECOND CLASS </h3>';
				break;
			
			default:
				echo '<h3 style="color: red"> YOU HAVE FAILED </h3>';
				break;
		}

	?>
<?php require 'includes/footer.php' ?>
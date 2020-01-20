<?php 
	$title = "If-Else";
	include 'includes/header.php' 
?>

	<h1> IF ELSE Statement </h1>

	<?php

		$grade = 50;

		if ($grade >= 50) {
			echo '<h3 style="color: green"> YOU HAVE PASSED </h3>';
		}else {
			echo '<h3 style="color: red"> YOU HAVE FAILED </h3>';
		}

		$grade = 'B';

		if ($grade == 'A') {
			echo '<h3 style="color: green"> YOU PASSED IN FIRST CLASS </h3>';	
		}elseif ($grade == 'B') {
			echo '<h3 style="color: blue"> YOU PASSED IN SECOND CLASS </h3>';
		}else {
			echo '<h3 style="color: red"> YOU HAVE FAILED </h3>';
		}

	?>
<?php require 'includes/footer.php' ?>
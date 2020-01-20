<?php 
	$title = "Date and Time";
	include 'includes/header.php' 
?>

	<h1> DATE and TIME Manipulation </h1>

	<?php

		$datenow = getdate();
		echo "Today's Date is: </br>";
		echo $datenow['mday']. " <br>";
		echo $datenow['mon']. " <br>";
		echo $datenow['year']. " <br>";

		echo "Today's Date is: ".$datenow['mday']. "/" .$datenow['mon']. "/".$datenow['year']." <br>";

		echo time(). "<br>";

		print date("m/d/y G.i:s<br>", time()). '<br>';
		print date("j of F Y, \a\\t g.i a", time()). "<br>";

	?>
<?php require 'includes/footer.php' ?>
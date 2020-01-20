<?php 
	$title = "String Manipulation";
	include 'includes/header.php' 
?>

	<h1> STRING MANIPULATION Statement </h1>

	<?php

		$str1 = "When Student came late";
		$str2 = "in class, stand with Rock";
		$name = "pragati gujarathi";

		echo $str1. " " .$str2;
		echo "</br>";
		echo "<hr>";
		//echo $str1.$str2;

		//String Transformation
		echo "Uppercase of First Letter: ".ucfirst($name). " </br>";
		echo "Uppercase of First Letter for each Word: ".ucwords($name). " </br>";
		echo "All are in Uppercase: ".strtoupper($name). " </br>";
		echo "All are in Lowercase: ".strtolower("THIS IS THE BASICS OF PHP"). " </br>";
		echo "<hr>";

		echo "Repeate String: ".str_repeat('a', 10). " <br>";
		echo "Repeate String: ".strtoupper(str_repeat('a', 10)). " <br>";
		echo "Get SubString: ".substr($name, 5, 10). " <br>";
		echo "Get Position of String: ".strpos($name, 'g'). " </br>";
		echo "Find Character 'P': ".strchr($name, 'P'). " </br>";
		echo "Find Character 'a': ".strchr($name, 'a'). " </br>";
		echo "Find Character 'j': ".strchr($name, 'j'). " </br>";
		echo "Find Character 'g': ".strchr($name, 'g'). " </br>";

		echo "Find Length of String: ".strlen($name). " </br>";
		echo "Without Trim: "."A"." B C D "."E". "<br>";
		echo "Trim Spaces on both String: "."A".trim(" B C D ")."E". "<br>";
		echo "Trim Space to the Left: "."A".ltrim(" B C D ")."E". "<br>";
		echo "Trim space to the Right: "."A".rtrim(" B C D ")."E". "<br>";
		echo "Replace String with another: ".str_replace('stand', 'sit', $str2). "<br>";


	?>
<?php require 'includes/footer.php' ?>
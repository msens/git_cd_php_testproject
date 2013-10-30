<?php

/**
 * Converts Fahrenheit to Celsius (and back again)
 * 
 * This sample application takes a number of degrees entered by the user and 
 * converts them from Fahrenheit to Celsius or vice versa
 *  
 */

?>
<html>
	<head>
		<title>Fahrenheit / Celsius PHP Convertor</title>
	</head>
	<body>
		<h1>Fahrenheit / Celsius PHP Convertor</h1>
		<form method="get">
			Enter number of degrees: <input type="text" name="degrees" /><br />
			<select name="conversion">
				<option value="ctf">Celsius to Fahrenheit</option>
				<option value="ftc">Fahrenheit to Celsius</option>
			</select>
			<input type="submit" value="Convert!" />
		</form>

<?php
	
if (isset($_GET['degrees']) && isset($_GET['conversion'])) {
	
	$degrees = (int) $_GET['degrees'];
	
	switch($_GET['conversion']) {
	
		// Convert Celsius to Fahrenheit
		case 'ctf': 
			$result = sprintf("%0.2f", $degrees * 9 / 5 + 32);
			$message = "$degrees&deg; Celsius is $result&deg; Fahrenheit";
			break;

		// Convert Fahrenheit to Celcius
		case 'ftc':
			$result = sprintf("%0.2f", ($degrees - 32) * 5 / 9);
			$message = "$degrees&deg; Fahrenheit is $result&deg; Celsius";
			break;
	}

	// Print out the results
	echo "<hr /><strong><em>$message</em></strong><hr />";
}
?>

	</body>
</html>

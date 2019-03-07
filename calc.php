<?php 

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$opp = $_GET['opp'];

if ($opp == 'add') {
	$result = $n1 + $n2;
	$problem = "$n1 + $n2 = $result";
	$Operator = 'Addition'; 
} else if ($opp == 'sub') {
	$result = $n1 - $n2;
	$problem = "$n1 - $n2 = $result";
	$Operator = 'Subtraction';
} else if ($opp == 'mult') {
	$result = $n1 * $n2;
	$problem = "$n1 * $n2 = $result";
	$Operator = 'Multiplication';
} else if ($opp == 'div') {
	$result = $n1 / $n2;
	$problem = "$n1 / $n2 = $result";
	$Operator = 'Division';
} else if ($opp == 'pow') {
	$result = pow($n1,$n2);
	$problem = "$n1 ^ $n2 = $result";
	$Operator = 'The nth Power';
} else {
	echo "Invalid Information";
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Simple Calculator</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<img src="images/calculator.png" alt="Bob's Simple Calculator" title="Bob's Simple Calculator">
		<div>
			<h1>Your Results!</h1>

			<h3><?php echo "Number 1 = $n1"; ?></h3>

			<h3><?php echo "Number 2 = $n2"; ?></h3>

			<h3><?php echo "Operator: $Operator"; ?></h3>

			<h3><?php echo "Result: $result"; ?></h3>

			<h3><?php echo "$problem"; ?></h3>
		</div>
	</body>
</html>
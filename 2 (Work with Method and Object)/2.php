<?php 
	include "function.php";
?>

<htm>
	<head>
		<title>OOP Test</title>
	</head>
	<body>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Enter Number 1: </td>
					<td><input type="number" name="num1"/></td>
				</tr>
				<tr>
					<td>Enter Number 2: </td>
					<td><input type="number" name="num2"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="calculation" value="calculate"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['calculation'])){
		$number1 = $_POST['num1'];
		$number2 = $_POST['num2'];

		if(empty($number1) or empty($number2))
			{
				echo "<span style='color:#EE6554'> Field must not be empty.</span><br>";
			}
		else
			{
				echo "First Number is ".$number1." And Second Number is ".$number2."</br>";
				$calculation = new Calculation;
				$calculation->add($number1,$number2)."</br>";
				$calculation->sub($number1,$number2)."</br>";
				$calculation->mul($number1,$number2)."</br>";
				$calculation->div($number1,$number2)."</br>";

			}
	}
?>
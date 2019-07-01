<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	
	<form method="POST" action="calculate">
		@method('POST')
		@csrf()

		
		<input type="number" name="result" value="<?= $result?>">
		<br>
		<input type="number" name="number" required>
		<br>


		<select name="operation" required>
			<option value="Adder">Sum</option>
			<option value="Subtracter">Subtract</option>
			<option value="Multiplier">Multiply</option>
			<option value="Divider">Divide</option>
		</select>

		<input type="submit" value="Calculate">
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

	<form method="POST" action="calculate">
		@method('POST')
		@csrf()

		<input type="text" name="number" required>
		<input type="text" name="numberSecond">
		
		<select name="operation" required>
			<option 'Adder'>Sum</option>
			<option 'Subtracter'>Subtract</option>
			<option 'Multiplyer'>Multiply</option>
			<option 'Divider'>Divide</option>
		</select>

		<input type="submit" value="Calculate">
	</form>

</body>
</html>
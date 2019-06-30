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
		
		<select name="operation" required>
			<option 'sum'>Sum</option>
			<option 'subtract'>Subtract</option>
			<option 'multiply'>Multiply</option>
			<option 'divide'>Divide</option>
		</select>

		<input type="submit" value="Calculate">
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	
	<form method="POST" action="calculate">
		@method('POST')
		@csrf()

		<input type="number" name="number" required>
		<input type="number" name="numberSecond" 
			value="<?= (isset($result) && $result!= null)? $result : 0;?>">
		
		<select name="operation" required>
			<option value="Adder">Sum</option>
			<option value="Subtracter">Subtract</option>
			<option value="Multiplyer">Multiply</option>
			<option value="Divider">Divide</option>
		</select>

		<input type="submit" value="Calculate">
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" 
	    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
	    crossorigin="anonymous"
    >
</head>
<body>
    <div class="container-fluid">
    	<form method="POST" action="calculate">
		    @method('POST')
		    @csrf()

            <div class="row">
    			<div class="col-md-6 offset-md-3 text-center">
      		        <input type="number" name="result" value="<?= $result?>">
                </div>
            </div>
            <div class="row">
    			<div class="col-md-6 offset-md-3 text-center">
                    <input type="number" name="number" required>
                </div>
            </div>
            <div class="row">
    			<div class="col-md-6 offset-md-3 text-center">
                    <select name="operation" required>
			            <option value="Adder">Sum</option>
			            <option value="Subtracter">Subtract</option>
			            <option value="Multiplier">Multiply</option>
			            <option value="Divider">Divide</option>
		            </select>
                </div>
            </div>    
            <div class="row">
    			<div class="col-md-6 offset-md-3 text-center">
                    <input type="submit" value="Calculate">
                </div>
            </div>
        </form>
    </div>	
</body>
</html>
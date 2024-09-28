<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
    <style>
      table {border: 2px solid black;}
      th, td {border: 1px solid black; padding: 10px 30px;}
    </style>
</head>
<body>
<h1> Menu </h1>
		<table>
			<tr>
				<th>Order</th>
				<th>Amount</th>
			</tr>
			<tr>
				<td>Burger</td>
				<td>PHP 50</td>
			</tr>
			<tr>
				<td>Fries</td>
				<td>PHP 75</td>
			</tr>
			<tr>
				<td>Steak</td>
				<td>PHP 150</td>
			</tr>
		</table>

        <br>
		<form action="calculate.php" method="POST">
			Select an order
			<select name="order">
				<option value="burger">Burger</option>
				<option value="fries">Fries</option>
				<option value="steak">Steak</option>
			</select> <br> <br>
			Quantity
			<input type="number" min="1" step="1" value="1" name="quantity"> <br> <br>
			Cash
			<input type="number" min="1" step="1" name="cash"> <br> <br>
			<input type="submit" value="ORDER" name="orderButton">
		</form>
</body>
</html>
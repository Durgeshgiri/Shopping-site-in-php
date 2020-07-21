<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <scrip
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

	<title>Shopping site</title>
</head>
<body>
	<div class="container">
		<h1>Shopping site</h1>
		<center>
			<a href="index.php" class="btn btn-warning col-lg-2">Home</a>
			<a href="viewcart.php" class="btn btn-warning col-lg-2">Cart</a>

		</center>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
				</tr>
			</thead>
			<form action="insertCart.php" method="post">
			<tbody>
				<tr>
					<td>Sarso tel</td>
					<td><img src="images/a.png" width="40%"></td>
					<td>130</td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="qty" class="form-control col-lg-6"></td>
					<input type="hidden" name="name" value="Sarso tel">
					<input type="hidden" name="price" value="130">
					<td><input type="submit" value="Add Cart" name="addcart" class="btn btn-primary"></td>
				</tr>
			</tbody>
			</form>
		</table>
		

	</div>

</body>
</html>
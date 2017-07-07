<!DOCTYPE html>
<html>
<head>
	<title>Paypal Payment</title>
	<!--CSS Files--> 
	<link rel="stylesheet" type="text/css" href="public/plugins/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><h3>Payment</h3></div>
			<div class="panel-body">
				<form action="app/checking.php" method="post">
					<div class="form-group">
						<label>Product:</label>
						<input type="text" name="product" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Price:</label>
						<input class="form-control" type="text" name="price" />
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!--Javascript Files-->
<script type="text/javascript" src="public/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="public/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
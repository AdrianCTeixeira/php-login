
<!DOCTYPE html>
<html>
<head>
	<title>Oi</title>	
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css">	
</style>
</head>
<body class="text-center">
	<form class="form-signin">
		<div class="form-group">			
			<p>
				<a href="index.php">
					<img href="index.php" src="https://image.freepik.com/icones-gratis/cabeca-de-cavalo-com-esboco-cabelo_318-49220.jpg" width="200" height="200">
				</a>
			</p>
		</div>		
		<div class="form-group">			
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary">Registrar</button>
	</form>

	<?php require_once "files/footer.php" ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Oi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css">	
</style>
</head>
<body class="text-center">
	<form class="form-signin">		
		<div class="form-group">
			<p>
				<a href="index.php">
					<img src="https://www.bemcolar.com/media/catalog/product/cache/1/imagem1/400x/9df78eab33525d08d6e5fb8d27136e95/a/d/adesivo-de-parede-cavalo.png" width="200" height="200">
				</a>
			</p>
		</div>
		<h1 class="h3 mb-3 font-weight-normal">Acesse sua conta</h1>
		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
		<label for="inputPassword" class="sr-only">Senha</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
		<div class="alert alert-danger" role="alert" style="display: none;">
			A simple danger alert—check it out!
		</div>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Lembrar
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

		<p class="mt-5 mb-3 text-muted">© 2017-2018</p>
	</form>
	<?php require_once "files/footer.php" ?>
</body>
</html>
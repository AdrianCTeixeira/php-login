<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "files/config.php"; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<?php require_once "files/footer.php" ?>
</head>
<body class="text-center ">
	<?php	
 	echo '<h1>Hello world. Today is:';
 	echo date(" Y m d");
 	echo '</h1> ';
 	echo '<a href="login.php">Logar</a> <a href="register.php">Registrar</a>'
 	?>

 	
</body>
</html>
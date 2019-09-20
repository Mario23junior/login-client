<!DOCTYPE html>
<html>
<head>
	<title>Sistema Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- GoogleFonts - OpenSans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Fontawesome 5.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>

<!-- Init of Bootstrap -->

<div class="container">

	<div class="col-md-12 col-md-offset-6">
		<h1> Sistema de Login</h1>

		<!-- Form for Login -->
			<form method="POST" class="log" action="controller/loginController.php">

				<br><br><p>Entre na sua conta:</p><br>

				<!-- Input do E-mail -->
				<input type="email" name="email" class="form-control field" placeholder="example@email.com" autofocus required><br>

				<!-- Input do Senha -->
				<input type="password" name="password" class="form-control field" placeholder="********" required><br>

				<!-- Botão para fazer Login -->
				<button class="btn btn-default" type="submit">
					 <i class="fa fa-lock"></i> Entrar
				</button><br><br>
			</form>

			

	</div>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
		<?php include_once 'pages/head.php'; ?>
</head>

<body>
		<form class="form-signin">

				<div class="text-center mb-4">
						<img class="mb-4" src="img/logo-pentaxial-10-anos.svg" alt="Logo Pentaxial 10 anos">
						<h1 class="h3 mb-3 font-weight-normal">Labels flutuantes</h1>
						<p>Construa campos de formulário usando labels flutuantes, através do pseudo-elemento <code>:placeholder-shown</code>. <a href="https://caniuse.com/#feat=css-placeholder-shown">Funciona nas últimas versões do Chrome, Safari e Firefox.</a></p>
				</div>

				<div class="form-label-group">
						<input type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required="" autofocus="">
						<label for="inputEmail">Endereço de email</label>
				</div>

				<div class="form-label-group">
						<input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
						<label for="inputPassword">Senha</label>
				</div>

				<div class="checkbox mb-3">
						<label>
						<input type="checkbox" value="lembrar de mim"> Lembrar de mim
						</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
				<p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
		</form>
</body>

</html>
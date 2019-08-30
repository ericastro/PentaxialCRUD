<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include_once 'pages/head.php'; ?>
</head>

<body>
	<!-- Menu Navegação -->
	<section>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="img/logo-pentaxial-10-anos.svg" class="d-inline-block align-top" height="30" alt="Logo Pentaxial 10 anos">
			</a>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Destaques</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Preços</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	<!-- Menu Navegação -->

	<!-- Container Principal -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Cadastro de Pessoas</h1>					
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="process.php" method="POST" enctype="multipart/form-data">
					<div>
						<label for="nome">Nome</label>
						<input type="form-text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite o nome" />
					</div>

					<div>
						<label for="sobrenome">Sobrenome</label>
						<input type="form-text" class="form-control" id="sobrenome" name="sobrenome" aria-describedby="sobrenomeHelp" placeholder="Digite o Sobrenome">
					</div>

					<div>
						<label for="inputEstado">Sexo</label>
						<select id="inputEstado" class="form-control">
						<option selected>Escolher...</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div>

					<div>
						<label for="exampleInputEmail1">Endereço de email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
						<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
					</div>

					<div>
						<label>Anexar arquivos: <input type="file" name="image[]" multiple="multiple"></label>	
					</div>
					
					<button type="submit" class="btn btn-dark btn-primary">Salvar</button>	
				</form>
			</div>
		</div>
	</div>
	<!-- Container Principal -->

	<footer class="fixed-bottom bg-dark" style="color: white">
		<p class="text-right wh-100">Developed by Eric Castro</p>
	</footer>

</body>
<?php include_once 'pages/javascript.php'; ?>
</html>
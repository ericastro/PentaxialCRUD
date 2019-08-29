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
				<h1>Cadastro de Pessoas<a href="create.php" class="btn btn-secondary btn-dark btn-lg active ml-3" role="button" aria-pressed="true">+</a></h1>

			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Primeiro</th>
							<th scope="col">Último</th>
							<th scope="col">Nickname</th>
						</tr>
					</thead>
					<tbody>
						<tr onclick="alert();">
							<th scope="row">1</th>
							<td >Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Container Principal -->

	<footer class="fixed-bottom bg-dark footer-color">
		<p class="text-right wh-100">Developer by Eric Castro</p>
	</footer>

</body>
<?php include_once 'pages/javascript.php'; ?>
</html>
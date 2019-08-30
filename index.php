<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include_once 'pages/head.php'; ?>
</head>

<body>
	<!-- Menu Navegação -->
	<section>
		<?php include_once 'pages/nav.php'; ?>
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
						<tr onclick="editarPessoa('1');">
							<th scope="row">1</th>
							<td>Mark</td>
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

	<script type="text/javascript">
		function editarPessoa(idPessoa) {
			alert(idPessoa);
		}
		$( document ).ready(function() {});
	</script>

	<footer class="fixed-bottom bg-dark footer-color">
		<p class="text-right wh-100">Developed by Eric Castro</p>
	</footer>

</body>
<?php include_once 'pages/javascript.php'; ?>
</html>
<?php
	include_once 'DBMS.class.php';
	$pessoas 	= "";
	$error 		= "";
	$crud 		= new CRUD();
	$table 		= "pessoas";

	if ( empty($_GET) )
	{
		try
		{
			$pessoas = $crud->Read($table,"","idPessoa ASC","*");
		}
		catch (Exeption $ex)
		{
			$error = "Ocorreu o erro : " + $ex.message();
		}
	}
	else
	{
		$pessoas = $crud->Delete($table,$_GET['apagarId']);
		
		$pessoas = $crud->Read($table,"","idPessoa ASC","*");
	}
?>

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
			<div class="col-12"><p>Clique nos dados da pessoa para editar os dados ou Excluir.</p></div>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nome</th>
							<th scope="col">Sobrenome</th>
							<th scope="col">Email</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if(is_object($pessoas))
							{
								foreach ($pessoas as $pessoa) 
								{
									echo '<tr onclick="editarPessoa(' . $pessoa->idPessoa . ')">';
									echo '<th scope="row">' . $pessoa->idPessoa . '</th>';
									echo '<td>' . $pessoa->nome . '</td>';
									echo '<td>' . $pessoa->sobrenome . '</td>';
									echo '<td>' . $pessoa->email . '</td>';
									echo '</tr>';
								}	
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Container Principal -->

	<footer class="fixed-bottom bg-dark footer-color">
		<p class="text-right wh-100">Developed by Eric Castro</p>
	</footer>

	<script type="text/javascript">
		function editarPessoa(idPessoa) {
			var url = "update.php?id=".concat(idPessoa);
			window.location.href = url;
		}
	</script>

</body>
<?php include_once 'pages/javascript.php'; ?>
</html>
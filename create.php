<?php
include_once 'DBMS.class.php';
$pessoas = -1;
$error = "";

if (!empty($_POST))
{
	$crud = new CRUD();
	$table = "pessoas";

	try
	{
		$pessoas = $crud->Create($table,[":nome" 		=> "'" . $_POST['nome'] . "'",
										 ":sobrenome" 	=> "'" . $_POST['sobrenome'] . "'",
										 ":sexo" 		=> "'" . $_POST['sexo'] . "'",
										 ":email" 		=> "'" . $_POST['email'] . "'",]);
	}
	catch (Exeption $ex)
	{
		$error = "Ocorreu o erro : " + $ex.message();
	}
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
				<?php
					if ($pessoas > 0)
					{
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>" . $_POST["nome"] . " " . $_POST["sobrenome"] ."</strong>, foi incluído(a) com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					}
					else if ( $error != "" )
					{
						echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>" . $error . "</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";	
					}
				?>
				<h1>Cadastro de Pessoas</h1>					
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="create.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
					<div>
						<label for="nome">Nome</label>
						<input type="form-text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite o nome" required />
					</div>

					<div>
						<label for="sobrenome">Sobrenome</label>
						<input type="form-text" class="form-control" id="sobrenome" name="sobrenome" aria-describedby="sobrenomeHelp" placeholder="Digite o Sobrenome" required />
					</div>

					<div>
						<label for="sexo">Sexo</label>
						<select id="sexo" name="sexo" class="form-control" required>
						<option value ="" selected>Escolher...</option>
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
						</select>
					</div>

					<div>
						<label for="email">Endereço de email</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email" required />
						<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
					</div>

					<div>
						<label>Anexar arquivos: <input type="file" name="files[]" id="files" multiple="multiple"></label>	
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
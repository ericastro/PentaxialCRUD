<?php
	include_once 'DBMS.class.php';
	$pessoas 	= "";
	$error 		= "";
	$crud 		= new CRUD();
	$table 		= "pessoas";

	if ( !empty($_GET) )
	{
		try
		{
			$pessoas = $crud->Read($table,"WHERE idPessoa = " . $_GET['id']);
		}
		catch (Exeption $ex)
		{
			$error = "Ocorreu o erro : " + $ex.message();
		}
	}
	else if ( !empty($_POST) )
	{
		try
		{
			$pessoas = $crud->Update($table,["nome" 		=> "'" . $_POST['nome'] . "'",
											 "sobrenome" 	=> "'" . $_POST['sobrenome'] . "'",
											 "sexo" 		=> "'" . $_POST['sexo'] . "'",
											 "email" 		=> "'" . $_POST['email'] . "'",],$_POST['idPessoa']);
			//ISSO NAO É CORRETO!!!
			$pessoas = $crud->Read($table,"WHERE idPessoa = " . $_POST['idPessoa']);
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
					if ( !empty($_POST) )
					{
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>" . $_POST["nome"] . " " . $_POST["sobrenome"] ."</strong>, foi atualizado(a) com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					}
					else if ( $error != "" )
					{
						echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>" . $error . "</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";	
					}
				?>
			</div>
			<div class="col-sm-12 col-md-5">
				<h1>Cadastro de Pessoas</h1>
			</div>
			<div class="col-sm-12 col-md-7">
					<button class="btn-dark btn-lg ml-3" onclick="Editar();">Editar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php if (is_object($pessoas)){ foreach ($pessoas as $pessoa) { ?>
				<form action="update.php" method="POST" enctype="multipart/form-data">
					<div>
						<label for="nome">Nome</label>
						<input type="hidden" name="idPessoa" value="<?=$pessoa->idPessoa?>">
						<input type="form-text" class="form-control myInputs" id="nome" name="nome" value="<?=$pessoa->nome?>" aria-describedby="nomeHelp" placeholder="Digite o nome" disabled="true" />
					</div>

					<div>
						<label for="sobrenome">Sobrenome</label>
						<input type="form-text" class="form-control myInputs" id="sobrenome" name="sobrenome" value="<?=$pessoa->sobrenome?>" aria-describedby="sobrenomeHelp" placeholder="Digite o Sobrenome" disabled="true" />
					</div>

					<div>
						<label for="sexo">Sexo</label>
						<select id="sexo" name="sexo" class="form-control myInputs" disabled="true">
						<option>Escolher...</option>
							<option <?php if ( $pessoa->sexo == 'M' ) { echo 'selected'; } ?> value="Masculino">Masculino</option>
							<option <?php if ( $pessoa->sexo == 'F' ) { echo 'selected'; } ?> value="Feminino">Feminino</option>
						</select>
					</div>

					<div>
						<label for="email">Endereço de email</label>
						<input type="email" class="form-control myInputs" name="email" id="email" value="<?=$pessoa->email?>" aria-describedby="emailHelp" placeholder="Seu email" disabled="true" />
						<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
					</div>

					<div>
						<label>Anexar arquivos: <input id="files" type="file" name="files[]" multiple="multiple" class="myInputs" disabled="true" /></label>	
					</div>
					
					<button id="btnSalvar" type="submit" class="btn btn-dark btn-primary myInputs" disabled="true">Salvar</button>	
				</form>
				<?php } }?>
			</div>
		</div>
	</div>
	<!-- Container Principal -->

	<script type="text/javascript">
		function Editar(){
			$( "#nome" ).prop( "disabled", false );
			$( "#sobrenome" ).prop( "disabled", false );
			$( "#sexo" ).prop( "disabled", false );
			$( "#email" ).prop( "disabled", false );
			$( "#files" ).prop( "disabled", false );
			$( "#btnSalvar" ).prop( "disabled", false );
		}
	</script>

	<footer class="fixed-bottom bg-dark" style="color: white">
		<p class="text-right wh-100">Developed by Eric Castro</p>
	</footer>

</body>
<?php include_once 'pages/javascript.php'; ?>
</html>
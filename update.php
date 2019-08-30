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
			<div class="col-sm-12 col-md-5">
				<h1>Cadastro de Pessoas</h1>
			</div>
			<div class="col-sm-12 col-md-7">
					<button class="btn-dark btn-lg ml-3" onclick="Editar();">Editar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="process.php" method="POST" enctype="multipart/form-data">
					<div>
						<label for="nome">Nome</label>
						<input type="hidden" name="idPessoa" value="1">
						<input type="form-text" class="form-control myInputs" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite o nome" disabled="true" />
					</div>

					<div>
						<label for="sobrenome">Sobrenome</label>
						<input type="form-text" class="form-control myInputs" id="sobrenome" name="sobrenome" aria-describedby="sobrenomeHelp" placeholder="Digite o Sobrenome" disabled="true" />
					</div>

					<div>
						<label for="sexo">Sexo</label>
						<select id="sexo" class="form-control myInputs" disabled="true">
						<option selected>Escolher...</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div>

					<div>
						<label for="email">Endereço de email</label>
						<input type="email" class="form-control myInputs" id="email" aria-describedby="emailHelp" placeholder="Seu email" disabled="true" />
						<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
					</div>

					<div>
						<label>Anexar arquivos: <input id="files" type="file" name="image[]" multiple="multiple" class="myInputs" disabled="true" /></label>	
					</div>
					
					<button id="btnSalvar" type="submit" class="btn btn-dark btn-primary myInputs" disabled="true">Salvar</button>	
				</form>
			</div>
		</div>
	</div>
	<!-- Container Principal -->

	<script type="text/javascript">
		function Editar(){
			alert();
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
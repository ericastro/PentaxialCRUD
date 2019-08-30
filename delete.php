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
					<button class="btn-danger btn-lg ml-3" data-toggle="modal" data-target="#modalExcluir" onclick="Excluir('1')">Excluir</button>
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

				</form>
			</div>
		</div>
	</div>
	<!-- Container Principal -->

	<!-- Modal de Exclusão -->
	<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Excluir Pessoa ?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-danger">Excluir</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal de Exclusão -->

	<script type="text/javascript">
		function Excluir(idPessoa){
			$(".modal-body").html("<p>Deseja realmente excluir a pessoa" + idPessoa + " ?");
		}
	</script>

	<footer class="fixed-bottom bg-dark" style="color: white">
		<p class="text-right wh-100">Developed by Eric Castro</p>
	</footer>

</body>
<?php include_once 'pages/javascript.php'; ?>
</html>
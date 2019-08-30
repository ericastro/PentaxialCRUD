<?php
	$file =  basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">
		<img src="img/logo-pentaxial-10-anos.svg" class="d-inline-block align-top" height="30" alt="Logo Pentaxial 10 anos">
	</a>

	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li <?php if( $file == "index.php") { echo 'class="nav-item active"';} else { echo 'class="nav-item"';} ?>>
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li <?php if( $file == "create.php") { echo 'class="nav-item active"';} else { echo 'class="nav-item"';} ?>>
				<a class="nav-link" href="create.php">Cadastrar</a>
			</li>
			<li <?php if( $file == "update.php") { echo 'class="nav-item active"';} else { echo 'class="nav-item"';} ?>>
				<a class="nav-link" href="update.php">Editar / Excluir</a>
			</li>
		</ul>
	</div>
</nav>
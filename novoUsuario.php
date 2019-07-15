<!DOCTYPE HTML>
<html>
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php include 'head.php'; ?>

<body>
	<div class="page-container">
		<div class="left-content">
			<div class="mother-grid-inner">
				<?php include 'nav.php'; ?>
				<!--inner block start here-->
				<div class="inner-block">
					<div class="typography">
						<h2>Novo Usuário</h2>
						<form action="" method="GET">
							<div class="clearfix"> </div>
							<div class="typo-buttons col-md-12 grid_4">
								<div class="col-md-12 well">
									<label class="col-md-4">Dados </label>
									<input class="col-md-3" type="text" placeholder="Nome" maxlength="100" required>
									<input class="col-md-5" type="text" placeholder="Sobrenome" maxlength="100" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Matrícula </label>
									<input class="col-md-3" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Cargo </label>
									<input class="col-md-8" type="text" maxlength="50" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Usuário </label>
									<input class="col-md-3" type="text" maxlength="50" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Senha </label>
									<input class="col-md-3" type="password" maxlength="50" required>
								</div>
								<div class="grid1">
									<button type="button" class="btn btn-1 btn-success">Criar</button>
									<a href="/"><button type="button" class="btn btn-1 btn-danger">Cancelar</button></a>
								</div>
							</div>
						</form>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--inner block end here-->
				<?php include 'footer.php'; ?>
			</div>
		</div>
		<?php include 'menu.php'; ?>
		<div class="clearfix"> </div>
	</div>
	<!--slide bar menu end here-->

</body>

</html>
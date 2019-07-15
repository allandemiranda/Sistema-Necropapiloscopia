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
						<h2>Documentos ao Registro</h2>
						<form action="" method="GET">
							<div class="clearfix"> </div>
							<div class="typo-buttons col-md-12 grid_4">
								<div class="col-md-12 well">
									<label class="col-md-4">Protocolo Parecer </label>
									<input class="col-md-2" type="text" value="0000/0000" disabled>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nome Completo </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nome do Pai </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nome da Mãe </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Naturalidade </label>
									<input class="col-md-7" type="text" placeholder="Cidade" required>
									<input class="col-md-1" type="text" placeholder="UF" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Data de Nascimento </label>
									<input class="col-md-2" type="date" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Documento Apresentado </label>
									<select class="col-md-2" type="text">
										<option>RG</option>
										<option>CTPS</option>
										<option>PRONT. CIVIL</option>
										<option>RESERVISTA</option>
									</select>
									<input class="col-md-3" type="number" placeholder="nº" required>
									<input class="col-md-2" type="text" placeholder="Orgão" required>
									<input class="col-md-1" type="text" placeholder="UF" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Observações </label>
									<textarea class="col-md-8"></textarea>
								</div>
								<div class="grid1">
									<button type="button" class="btn btn-1 btn-success">Atualizar</button>
									<a href="/"><button type="button" class="btn btn-1 btn-danger">Cancelar</button></a>
								</div>
							</div>
						</form>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--inner block end here-->
				<?php include 'fooder.php'; ?>
			</div>
		</div>
		<?php include 'menu.php'; ?>
		<div class="clearfix"> </div>
	</div>
	<!--slide bar menu end here-->

</body>

</html>
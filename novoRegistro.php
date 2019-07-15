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
						<h2>Formulário de Registro</h2>
						<form action="" method="GET">
							<div class="clearfix"> </div>
							<div class="typo-buttons col-md-12 grid_4">
								<div class="col-md-12 well">
									<label class="col-md-4">Nº NIC </label>
									<input class="col-md-4" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Data de Entrada </label>
									<input class="col-md-2" type="date" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Informações Cadáver </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Data do Fato </label>
									<input class="col-md-2" type="date" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Procedente </label>
									<input class="col-md-4" type="text" placeholder="Bairro ou Hospital" required>
									<input class="col-md-3" type="text" placeholder="Cidade" required>
									<input class="col-md-1" type="text" placeholder="UF" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Situação do Cadáver </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nº da Guia de Solicitação </label>
									<input class="col-md-4" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Causa Morte </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Destino do Exame </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Protocolo SEI </label>
									<input class="col-md-8" type="text" required>
								</div>
								<div class="col-md-12 well">
									<input class="col-md-1" type="checkbox">
									<label class="col-md-11">Não apresenta condições de coleta de Impressões Digitais</label>
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
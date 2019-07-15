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
						<div class="col-md-12 chit-chat-layer1-left">
							<div class="work-progres">
								<div class="chit-chat-heading">
									Documentos Registrados
								</div>
								<?php
								if ($_GET["pesquisa"] == "") {
									echo '<form action="" method="POST">';
									echo '<div class="clearfix"> </div>';
									echo '<div class="typo-buttons col-md-12 grid_4">';
									echo '<div class="col-md-12 well">';
									echo '<label class="col-md-4">Data Inicial </label>';
									echo '<input name="dataInicial" class="col-md-3" type="date" required>';
									echo '</div>';
									echo '<div class="col-md-12 well">';
									echo '<label class="col-md-4">Data Final </label>';
									echo '<input name="dataFinal" class="col-md-3" type="date" required>';
									echo '</div>';
									echo '<div class="grid1">';
									echo '<button type="button" class="btn btn-1 btn-success">Pesquisar</button>';
									echo '</div>';
									echo '</div>';
									echo '</form>';
								}
								?>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Nº</th>
												<th>Nome</th>
												<th>Entrada</th>
												<th>Status</th>
												<th>Papiloscopista</th>
												<th>Imprimir</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>0003/19 </td>
												<td>- </td>
												<td>01/01/2019 </td>
												<td><span class="label label-warning">Sem Identificação</span></td>
												<td>SANDRA</td>
												<td><i class="fa fa-print"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
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
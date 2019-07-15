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
					<div class="market-updates">
						<div class="col-md-4 market-update-gd">
							<div class="market-update-block clr-block-1">
								<div class="col-md-8 market-update-left">
									<h3>83</h3>
									<h4>Doc. Registrados</h4>
									<p>Emiditos por este setor</p>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-file-text-o"> </i>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 market-update-gd">
							<div class="market-update-block clr-block-2">
								<div class="col-md-8 market-update-left">
									<h3>135</h3>
									<h4>Doc. Registrados</h4>
									<p>Emitidos por NOMEUS</p>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-eye"> </i>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 market-update-gd">
							<div class="market-update-block clr-block-3">
								<div class="col-md-8 market-update-left">
									<h3>23</h3>
									<h4>Usuários</h4>
									<p>Membros do setor</p>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-user"> </i>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--market updates end here-->
					<!--mainpage chit-chating-->
					<div class="chit-chat-layer1">
						<div class="col-md-12 chit-chat-layer1-left">
							<div class="work-progres">
								<div class="chit-chat-heading">
									Entradas Recentes
								</div>
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
											<tr>
												<td>0002/19 </td>
												<td>JOSÉ BARBOSA DA SILVA NETO </td>
												<td>01/01/2019 </td>
												<td><span class="label label-success">Identificado</span></td>
												<td>SANDRA</td>
												<td><i class="fa fa-print"></td>
											</tr>
											<tr>
												<td>0001/19 </td>
												<td>- </td>
												<td>01/01/2019 </td>
												<td><span class="label label-danger">Sem Condiçoes de Coleta</span></td>
												<td>SANDRA</td>
												<td><i class="fa fa-print"></td>
											</tr>
											<tr>
												<td>0003/19 </td>
												<td>- </td>
												<td>01/01/2019 </td>
												<td><span class="label label-warning">Sem Identificação</span></td>
												<td>SANDRA</td>
												<td><i class="fa fa-print"></td>
											</tr>
											<tr>
												<td>0002/19 </td>
												<td>JOSÉ BARBOSA DA SILVA NETO </td>
												<td>01/01/2019 </td>
												<td><span class="label label-success">Identificado</span></td>
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
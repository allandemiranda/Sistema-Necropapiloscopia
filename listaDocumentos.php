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
											<tr>
												<td>0001/19 </td>
												<td>- </td>
												<td>01/01/2019 </td>
												<td><span class="label label-danger">Sem Condiçoes de Coleta</span></td>
												<td>SANDRA</td>
												<td><i class="fa fa-print"></td>
											</tr>
										</tbody>
									</table>
									<div class="btn-group">
										<a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
										<a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
									</div>
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
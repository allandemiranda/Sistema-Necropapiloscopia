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
									Usuários do sistema
								</div>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Nome</th>
												<th>Sobrenome</th>
												<th>Matrícula</th>
												<th>Usuário</th>
												<th>Senha</th>
												<th>Excluir</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
											</tr>
											<tr>
												<td>2</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
											</tr>
											<tr>
												<td>3</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
											</tr>
											<tr>
												<td>4</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
											</tr>
											<tr>
												<td>5</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
											</tr>
											<tr>
												<td>6</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
											</tr>
											<tr>
												<td>7</td>
												<td>SANDRA </td>
												<td>MARIA MATEUS </td>
												<td>98.568-6 </td>
												<td>sandra.maria</td>
												<td><i class="fa fa-edit"></td>
												<td><i class="fa fa-remove"></td>
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
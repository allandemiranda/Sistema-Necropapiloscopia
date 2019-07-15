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
											<?php
											$servername = "localhost";
											$username = "root";
											$password = "itep123";
											$dbname = "itep_necro";

											// Create connection
											$conn = mysqli_connect($servername, $username, $password, $dbname);
											// Check connection
											if (!$conn) {
												die("Connection failed: " . mysqli_connect_error());
											}

											$sql = "SELECT * FROM usuarios";
											$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
												// output data of each row
												while ($row = mysqli_fetch_assoc($result)) {
													echo "<tr>";
													echo "<td>" . $row["id"] . "</td>";
													echo "<td>" . $row["nome"] . "</td>";
													echo "<td>" . $row["sobre_nome"] . "</td>";
													echo "<td>" . $row["matricula"] . "</td>";
													echo "<td>" . $row["usuario"] . "</td>";
													echo '<td><a href="?editar='.$row["id"].'"><i class="fa fa-edit"></a></td>';
													echo '<td><a href="?excluir='.$row["id"].'"><i class="fa fa-remove"></a></td>';
													echo "</tr>";
												}
											} else {
												echo "0 results";
											}

											mysqli_close($conn);
											?>
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
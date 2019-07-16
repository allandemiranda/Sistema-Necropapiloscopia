<!DOCTYPE HTML>
<html>
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
$protocolo = $ano_protocolo = $_GET["protocolo"];
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

$sql = "SELECT data_entrada FROM documentos WHERE id=" . $_GET["protocolo"];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		$data_entrada_ex = explode("-", $row["data_entrada"]);
		$ano_protocolo = $data_entrada_ex[0];
	}
} else {
	echo "0 results";
}

mysqli_close($conn);
?>
<?php
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$nome_completo = $nome_pai = $nome_mae = $naturalidade_cidade = $naturalidade_uf = $data_nascimento = $docuemnto_tipo = $docuemnto_numero = $docuemnto_orgao = $docuemnto_uf = $observacoes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome_completo = test_input($_SESSION['nome_completo']);
	$nome_pai = test_input($_POST["nome_pai"]);
	$nome_mae = test_input($_POST["nome_mae"]);
	$naturalidade_cidade = test_input($_POST["naturalidade_cidade"]);
	$naturalidade_uf = test_input($_POST["naturalidade_uf"]);
	$data_nascimento = test_input($_POST["data_nascimento"]);
	$docuemnto_tipo = test_input($_POST["docuemnto_tipo"]);
	$docuemnto_numero = test_input($_POST["docuemnto_numero"]);
	$docuemnto_orgao = test_input($_POST["docuemnto_orgao"]);
	$docuemnto_uf = test_input($_POST["docuemnto_uf"]);
	$observacoes = test_input($_POST["observacoes"]);

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

	$sql = "UPDATE `documentos` SET `nome_completo`='" . $nome_completo . "', `nome_pai`='" . $nome_pai . "',`nome_mae`='" . $nome_mae . "', `naturalidade_cidade`='" . $naturalidade_cidade . "',`naturalidade_uf`='" . $naturalidade_uf . "', `data_nascimento`='" . $data_nascimento . "',`docuemnto_tipo`='" . $docuemnto_tipo . "', `docuemnto_numero`='" . $docuemnto_numero . "',`docuemnto_orgao`='" . $docuemnto_orgao . "', `docuemnto_uf`='" . $docuemnto_uf . "',`observacoes`='" . $observacoes . "' WHERE id=" . $protocolo . "";
}
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
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							if (mysqli_query($conn, $sql)) {
								echo '<div class="alert alert-success alert-dismissable">';
								echo '<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>';
								echo 'Sucesso! Identificaçao adicionada a Nº 0000/0000.';
								echo '</div>';
							} else {
								echo '<div class="alert alert-danger alert-dismissable">';
								echo '<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>';
								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								echo '</div>';
							}
							mysqli_close($conn);
						}
						?>
						<h2>Documentos ao Registro</h2>
						<form action="adicionarIdentificacao.php" method="POST">
							<div class="clearfix"> </div>
							<div class="typo-buttons col-md-12 grid_4">
								<input name="protocolo_id" value="<?php echo $protocolo; ?>" type="hidden">
								<div class="col-md-12 well">
									<label class="col-md-4">Protocolo Parecer </label>
									<input class="col-md-2" type="text" value="<?php echo str_pad($protocolo, 4, '0', STR_PAD_LEFT) . "/" . $ano_protocolo; ?>" disabled>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nome Completo </label>
									<input name="nome_completo" class="col-md-8" type="text" onChange="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nome do Pai </label>
									<input name="nome_pai" class="col-md-8" type="text" onChange="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Nome da Mãe </label>
									<input name="nome_mae" class="col-md-8" type="text" onChange="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Naturalidade </label>
									<input name="naturalidade_cidade" class="col-md-7" type="text" placeholder="Cidade" onChange="javascript:this.value=this.value.toUpperCase();" required>
									<input name="naturalidade_uf" class="col-md-1" type="text" placeholder="UF" onChange="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Data de Nascimento </label>
									<input name="data_nascimento" class="col-md-2" type="date" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Documento Apresentado </label>
									<select name="docuemnto_tipo" class="col-md-2" type="text">
										<option>RG</option>
										<option>CTPS</option>
										<option>PRONT. CIVIL</option>
										<option>RESERVISTA</option>
									</select>
									<input name="docuemnto_numero" class="col-md-3" type="text" placeholder="nº" required>
									<input name="docuemnto_oragao" class="col-md-2" type="text" placeholder="Orgão" onChange="javascript:this.value=this.value.toUpperCase();" required>
									<input name="docuemnto_uf" class="col-md-1" type="text" placeholder="UF" onChange="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								<div class="col-md-12 well">
									<label class="col-md-4">Observações </label>
									<textarea name="observacoes" class="col-md-8" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
								</div>
								<div class="grid1">
									<button type="submit" class="btn btn-1 btn-success">Atualizar</button>
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
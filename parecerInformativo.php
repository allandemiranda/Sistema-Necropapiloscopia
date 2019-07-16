<!DOCTYPE HTML>
<html>

<head>
    <title>Sistema Necropapiloscopia </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Sistema, documentos" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .A4 {
            background-color: #ffffff;
            color: #000000;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15pt;
            line-height: 1.3;
        }

        .cabecalho-texto {
            text-align: center;
            font-size: 15pt;
        }

        .cabecalho-img-esquerda {
            float: left;
            width: 100%;
        }

        .cabecalho-img-direita {
            float: right;
            width: 100%;
        }

        .titulo {
            text-align: center;
            font-size: 16pt;
            color: #000000;
            background-color: #d5e2bb;
        }

        .paragrafo {
            text-indent: 4em;
            text-align: justify;
        }

        .datacao {
            text-align: right;
        }

        .assinatura {
            text-align: center;
            line-height: 0.2;
        }
    </style>
</head>
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

$sql = "SELECT * FROM documentos WHERE id='" . $_GET["protocolo"] . "'";
$result = mysqli_query($conn, $sql);

$perito_nome = $protocolo = $protocolo_ano = $entrada_dia = $entrada_mes = $entrada_ano = $numero_nic = $procedencia_barrio = $procedencia_cidade = $procedencia_uf = "";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $perito_nome = $row["perito"];
        $protocolo = str_pad($row["id"], 4, '0', STR_PAD_LEFT);
        $data_entrada_ex = explode("-", $row["data_entrada"]);
        $protocolo_ano = $data_entrada_ex[0];
        $entrada_dia = $data_entrada_ex[2];
        $entrada_mes = $data_entrada_ex[1];
        $entrada_ano = $data_entrada_ex[0];
        $numero_nic = $row["numero_nic"];
        $procedencia_barrio = $row["procedencia_bairro"];
        $procedencia_cidade = $row["procedencia_cidade"];
        $procedencia_uf = $row["procedencia_uf"];
    }
} else {
    //echo "0 results";
}

mysqli_close($conn);
?>
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

$sql = "SELECT * FROM usuarios WHERE nome='" . $perito_nome . "'";
$result = mysqli_query($conn, $sql);

$perito_sobrenom = $perito_cargo = $matricula = "";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $perito_sobrenom = $row["sobre_nome"];
        $perito_cargo = $row["cargo"];
        $perito_matricula = $row["matricula"];
    }
} else {
    //echo "0 results";
}

mysqli_close($conn);
?>

<body class="A4">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"><img class="cabecalho-img-esquerda" src="images/logoRN.jpg" /></div>
            <div class="col-sm-8 cabecalho-texto">
                <div><b>Governo do Estado do Rio Grande do Norte</b></div>
                <div><b>Secretaria de Estado da Segurança Pública e da Defesa Social</b></div>
                <div style="font-size: 16pt;"><b>INSTITUTO TÉCNICO-CIENTÍFICO DE PERÍCIA - ITEP</b></div>
                <div style="font-size: 16pt;"><b>INSTITUTO DE IDENTIFICAÇÃO - II</b></div>
                <div style="font-size: 16pt;"><i>Setor de Necropapiloscopia</i></div>
            </div>
            <div class="col-sm-2"><img class="cabecalho-img-direita" src="images/logoITEP.jpg" /></div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-10 titulo alert alert-success">
                <b>INFORMAÇÃO TÉCNICA NECROPAPILOSCÓPICA Nº <?php echo $protocolo; ?>/<?php echo $protocolo_ano; ?></b>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 paragrafo">
                <p>
                    Em, <b><?php echo $entrada_dia; ?> de <?php echo $entrada_mes; ?> de <?php echo $entrada_ano; ?></b> o Instituto de Identificação do Rio Grande do Norte - IIRN, em
                    conformidade com a legalidade vigente na Portaria nº 119/2012 - GS/SESED informa que o cadáver registrado no Instituto de Medicina Legal - IML sob <b>NIC
                        <?php echo $numero_nic; ?></b>, procedente do <?php echo $procedencia_barrio . " " . $procedencia_cidade . " " . $procedencia_uf; ?>, <b><u>não apresentava condições à coleta de Impressões
                            Digitais</u></b> com a qualidade mínima necessária ao confronto necropapiloscópico devido à sépsemia.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col datacao">
                <p>Natal/RN, <?php echo date('d/m/y') ?></p>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col assinatura">
                <p><b><?php echo $perito_nome . " " . $perito_sobrenome; ?></b></p>
                <p><?php echo $perito_cargo; ?></p>
                <p>Mat <?php echo $perito_matricula; ?></p>
            </div>
        </div>
    </div>
</body>

</html>
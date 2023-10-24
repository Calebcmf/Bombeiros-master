<?php
include("../conecta.php");

if (isset($_POST['enviar'])) {
    if (isset($_POST['check_10'])) {

        $valor = "CAUSADO POR ANIMAIS";

    }
    if (isset($_POST['check_11'])) {

        $valor = "MEIO DE TRANSPORTE";

    }
    if (isset($_POST['check_12'])) {

        $valor = "DESMORONAMENTO";

    }
    if (isset($_POST['check_13'])) {

        $valor = "EMERGÊNCIA MÉDICA";

    }
    if (isset($_POST['check_14'])) {

        $valor = "QUEDA DE ALTURA 2M";

    }
    if (isset($_POST['check_15'])) {

        $valor = "TENTATIVA DE SUICÍDIO";

    }
    if (isset($_POST['check_16'])) {

        $valor = "QUEDA PRÓPRIA ALTURA";

    }

    if (isset($_POST['check_17'])) {

        $valor = "AFOGAMENTO";

    }

    if (isset($_POST['check_19'])) {

        $valor = "AGRESSÃO";

    }

    if (isset($_POST['check_20'])) {

        $valor = "ATROPELAMENTO";

    }
    if (isset($_POST['check_21'])) {

        $valor = "CHOQUE ELÉTRICO";

    }
    if (isset($_POST['check_22'])) {

        $valor = "DESABAMENTO";

    }
    if (isset($_POST['check_23'])) {

        $valor = "DOMÉSTICO";

    }
    if (isset($_POST['check_24'])) {

        $valor = "ESPORTIVO";

    }
    if (isset($_POST['check_25'])) {

        $valor = "INTOXICAÇÃO";

    }
    if (isset($_POST['check_26'])) {

        $valor = "QUEDA BICLETA";

    }
    if (isset($_POST['check_27'])) {

        $valor = "QUEDA MOTO";

    }
    if (isset($_POST['check_28'])) {

        $valor = "QUEDA NÍVEL";

    }
    if (isset($_POST['check_29'])) {

        $valor = "TRABALHO";

    }
    if (isset($_POST['check_30'])) {

        $valor = "TRANSFERÊNCIA     ";

    }

    $comando = $pdo->prepare("INSERT INTO tipo_ocorrencia_pre_hospitalar(tipo_ocorrencia) VALUES('$valor')");
	$resultado = $comando->execute();
}
?>
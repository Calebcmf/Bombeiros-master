<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];

if (isset($_POST['enviar'])) {
    if (isset($_POST['resposta1'])) {

        $valor = "Deitada";

    }
    if (isset($_POST['resposta2'])) {

        $valor = "Semi-Sentada";

    }
    if (isset($_POST['resposta3'])) {

        $valor = "Sentada";

    }
    $comando = $pdo->prepare("INSERT INTO forma_conducao(forma_conducao, id_paciente) VALUES('$valor', $id)");
	$resultado = $comando->execute();
}
?>
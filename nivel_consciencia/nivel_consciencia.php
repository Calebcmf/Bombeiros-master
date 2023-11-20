<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = isset($_POST["idade"]) ? $_POST["idade"] : null;
    $format2 = isset($_POST["format2"]) ? $_POST["format2"] : null;
    $format3 = isset($_POST["format3"]) ? $_POST["format3"] : null;
    $format4 = isset($_POST["format4"]) ? $_POST["format4"] : null;

    if ($idade > 5) {
        $comando = $pdo->prepare("INSERT INTO avaliacao_paciente_maior(abertura_ocular, resposta_verbal, resposta_motora, id_paciente) VALUES(?, ?, ?, ?)");
        $resultado = $comando->execute([$format2, $format3, $format4, $id]);
    } else {
        $comando = $pdo->prepare("INSERT INTO avaliacao_paciente_menor(abertura_ocular, resposta_verbal, resposta_motora, id_paciente) VALUES(?, ?, ?, ?)");
        $resultado = $comando->execute([$format2, $format3, $format4, $id]);
    }
}
?>
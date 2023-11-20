<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];
$pressao = $_POST["pressao"];
$pulso = $_POST["pulso"];
$respiracao = $_POST["respiracao"];
$saturacao = $_POST["saturacao"];
$hgt = $_POST["hgt"];
$temperatura = $_POST["temperatura"];
$perfuracao = 0;

    if (isset($_POST['perfuracao_maior'])) {
        $perfuracao = "Maior";
    }
    if (isset($_POST['perfuracao_menor'])) {
        $perfuracao = "Menor";
    }
        $comandoPaciente = $pdo->prepare("INSERT INTO sinais_vitais (pressao_arterial, pulso, respiracao_mrm, saturacao, hgt_numero, temperatura_corporal, perfusao_2sec, id_paciente) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $resultadoPaciente = $comandoPaciente->execute([$pressao, $pulso, $respiracao, $saturacao, $hgt, $temperatura, $perfuracao, $id]);


?>
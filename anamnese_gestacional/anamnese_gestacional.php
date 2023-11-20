<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];
$per1 = $_POST["per1"];
$per2 = $_POST["per2"];
$per3 = $_POST["per3"];
$per4 = $_POST["per4"];
$per5 = $_POST["per5"];
$per6 = $_POST["per6"];
$per7 = $_POST["per7"];
$escolha1 = $_POST["escolha1"];
$escolha2 = $_POST["escolha2"];
$escolha3 = $_POST["escolha3"];
$escolha4 = $_POST["escolha4"];
$escolha5 = $_POST["escolha5"];
$escolha6 = $_POST["escolha6"];
$escolha7 = $_POST["escolha7"];
$escolha8 = $_POST["escolha8"];

if (isset($_POST['enviar'])) {
    $comandoPaciente = $pdo->prepare("INSERT INTO anamnese_gestacional(periodo_gestacao, fez_pre_natal, existe_possibilidade_complicacoes, e_o_primeiro_filho, quantos, que_horas_iniciaram_contracoes, duracao_contracoes, intervalo_contracoes, pressao_regiao_quadril, houve_ruptura_bolsa, feito_inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe, id_paciente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $resultadoPaciente = $comandoPaciente->execute([$per1, $escolha1, $escolha2, $escolha3, $per2, $per3, $per4, $per5, $escolha4, $escolha5, $escolha6, $escolha7, $per6, $escolha8, $per7, $id]);
}
?>
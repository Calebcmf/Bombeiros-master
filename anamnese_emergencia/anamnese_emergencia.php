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

    if (isset($_POST['enviar'])) {
        $comandoPaciente = $pdo->prepare("INSERT INTO anamnese_emergencia_medica(o_que_aconteceu, aconteceu_outras_vezes, quanto_tempo_aconteceu, possui_problema_saude, quais_problemas_saude, faz_uso_medicacao, horario_ultima_medicacao, quais_medicacao, alergico_alguma_coisa, alergique_o_que, ingeriu_alimento, horas_ingerir, id_paciente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $resultadoPaciente = $comandoPaciente->execute([$per1, $escolha1, $per2, $escolha2, $per3, $escolha3, $per4, $per5, $escolha4, $per6, $escolha5, $per7, $id]);
    }


?>
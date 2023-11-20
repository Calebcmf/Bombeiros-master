<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];
$base_do_estabiliza = $_POST["base_do_estabiliza"];
$tamanho_tala2 = $_POST["tamanho_tala2"] ?? 0;
$quantidade_tala2 = $_POST["quantidade_tala2"];
$tala2_total = $tamanho_tala2 . "|" . $quantidade_tala2;
$tamanho_colar = $_POST["tamanho_colar"] ?? 0;
$quantidade_colar = $_POST["quantidade_colar"];
$colar_total = $tamanho_colar . "|" . $quantidade_colar;
$coxins_estabiliza = $_POST["coxins_estabiliza"];
$tamanho_ked = $_POST["tamanho_ked"] ?? 0;
$quantidade_ked = $_POST["quantidade_ked"];
$ked_total = $tamanho_ked . "|" . $quantidade_ked;
$marca_rigida = $_POST["marca_rigida"];
$tamanho_ttf = $_POST["tamanho_ttf"] ?? 0;
$quantidade_ttf = $_POST["quantidade_ttf"];
$ttf_total = $tamanho_ttf . "|" . $quantidade_ttf;
$tirante_aranha = $_POST["tirante_aranha"];
$canula = $_POST["canula"];
$outros_1 = $_POST["outros_1"];
$outros_2 = $_POST["outros_2"];
$outros_3 = $_POST["outros_3"];
$outros1_texto = $_POST["outros1_texto"];
$outros2_texto = $_POST["outros2_texto"];
$outros3_texto = $_POST["outros3_texto"];
$outro1_total = $outros1_texto . "|" . $outros_1;
$outro2_total = $outros2_texto . "|" . $outros_2;
$outro3_total = $outros3_texto . "|" . $outros_3;


if (isset($_POST['enviar'])) {
    $comando = $pdo->prepare("INSERT INTO materiais_utilizados_deixados_hospital(base_do_estabiliza_hospital, tala_hospital, colar_hospital, coxins_estabiliza_hospital, ked_hospital, maca_rigida_hospital, ttf_hospital, tirante_aranha_hospital, canula_hospital, outros_1, outros_2, outros_3, id_paciente) VALUES('$base_do_estabiliza', '$tala2_total', '$colar_total', '$coxins_estabiliza', '$ked_total', '$marca_rigida', '$ttf_total', '$tirante_aranha', '$canula', '$outro1_total', '$outro2_total', '$outro3_total', $id)");
    $resultado = $comando->execute();
}
?>
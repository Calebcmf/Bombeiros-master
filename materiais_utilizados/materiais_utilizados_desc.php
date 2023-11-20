<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];
$tamanho_atadura = $_POST["tamanho_atadura"] ?? 0;
$quantidade_atadura = $_POST["quantidade_atadura"];
$atadura_total = $tamanho_atadura . "|" . $quantidade_atadura;
$cateter = $_POST["cateter"];
$compressa_comum = $_POST["compressa_comum"];
$tamanho_kit = $_POST["tamanho_kit"] ?? 0;
$quantidade_kit = $_POST["quantidade_kit"];
$kit_total = $tamanho_kit . "|" . $quantidade_kit;
$luvas_desc = $_POST["luvas_desc"];
$mascara_desc = $_POST["mascara_desc"];
$manta_aluminizada = $_POST["manta_aluminizada"];
$pas_do_dea = $_POST["pas_do_dea"];
$sonda_de_aspiracao = $_POST["sonda_de_aspiracao"];
$soro_fisiologico = $_POST["soro_fisiologico"];
$tamanho_tala = $_POST["tamanho_tala"] ?? 0;
$quantidade_tala = $_POST["quantidade_tala"];
$tala_total = $tamanho_tala . "|" . $quantidade_tala;
$outros = $_POST["outros"];

if (isset($_POST['enviar'])) {
    $comando = $pdo->prepare("INSERT INTO materiais_utilizados_descartaveis(ataduras_descartavel, cateter_tp_oculos_descartaveis, compressa_comum_descartaveis, kits_descartaveis, luvas_descartaveis, mascara_descartaveis, manta_aluminizada_descartaveis, pas_do_dea_descartaveis, sonda_aspiracao_descartaveis, soro_fisiologico_descartaveis, talas_pap_descartaveis, outros_descartaveis, id_paciente) VALUES('$atadura_total','$cateter','$compressa_comum','$kit_total','$luvas_desc','$mascara_desc','$manta_aluminizada','$pas_do_dea','$sonda_de_aspiracao','$soro_fisiologico','$tala_total','$outros', $id)");
    $resultado = $comando->execute();
}


?>
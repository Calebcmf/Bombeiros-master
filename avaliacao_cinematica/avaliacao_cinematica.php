<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];
$valor1 = 0;
$valor2 = 0;
$valor3 = 0;
$valor4 = 0;
$valor5 = 0;
$valor6 = 0;
$valor7 = 0;

try {
    if (isset($_POST['resposta1'])) {

        $valor1 = 1;

    }

    if (isset($_POST['resposta2'])) {

        $valor2 = 1;

    }

    if (isset($_POST['resposta3'])) {

        $valor3 = 1;

    }

    if (isset($_POST['resposta4'])) {

        $valor4 = 1;

    }

    if (isset($_POST['resposta5'])) {

        $valor5 = 1;

    }
    
    if (isset($_POST['resposta6'])) {

        $valor6 = 1;

    }

    if (isset($_POST['resposta7'])) {

        $valor7 = 1;

    }

        $comando = $pdo->prepare("INSERT INTO avaliacao_cinematica(disturbio_comportamento, encontrado_de_capacete, encontrado_de_cinto, para_brisas_avariado, caminhando_na_cena, painel_avariado, volante_torcido, id_paciente) VALUES('$valor1', '$valor2', '$valor3', '$valor4', '$valor5', '$valor6', '$valor7',$id )");
	    $resultado = $comando->execute();

}catch (PDOException $e) {
    echo "Error: " . $e->getMessage(); // Output any caught exception message
} 
?>

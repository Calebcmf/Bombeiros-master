<?php
session_start();
include("../conecta.php");

$id = $_SESSION["id_paciente"];

$lado = "indefinido";
$fraluxent = isset($_POST['check_1']) ? 1 : 0;
$esviceracao = isset($_POST['check_2']) ? 1 : 0;
$queimadura = isset($_POST['check_3']) ? 1 : 0;
$ferimentos = isset($_POST['check_4']) ? 1 : 0;
$fabfaf = isset($_POST['check_5']) ? 1 : 0;
$queimadura2 = isset($_POST['check_6']) ? 1 : 0;
$hemorragia = isset($_POST['check_7']) ? 1 : 0;
$amputacao = isset($_POST['check_8']) ? 1 : 0;
$queimadura3 = isset($_POST['check_9']) ? 1 : 0;
$parte = isset($_POST['parteCorpo']) ? $_POST['parteCorpo'] : "indefinido";
if (isset($_POST['check_39'])) {
    $lado = "Frente";
}

if (isset($_POST['check_40'])) {
    $lado = "Atrás";
}

// Use prepared statements to avoid SQL injection
$comando = $pdo->prepare("INSERT INTO localizacao_traumas (FraLuxEnt, Esviceracao, Queimadura1Grau, Ferimentos, FABFAF, Queimadura2Grau, Hemarrogia, Amputacao, Queimadura3Grau, Parte, Lado, id_paciente) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters to the prepared statement
$comando->bindParam(1, $fraluxent);
$comando->bindParam(2, $esviceracao);
$comando->bindParam(3, $queimadura);
$comando->bindParam(4, $ferimentos);
$comando->bindParam(5, $fabfaf);
$comando->bindParam(6, $queimadura2);
$comando->bindParam(7, $hemorragia);
$comando->bindParam(8, $amputacao);
$comando->bindParam(9, $queimadura3);
$comando->bindParam(10, $parte);
$comando->bindParam(11, $lado);
$comando->bindParam(12, $id);

// Execute the statement
$resultado = $comando->execute();

if ($resultado) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $comando->errorInfo()[2];
}
?>

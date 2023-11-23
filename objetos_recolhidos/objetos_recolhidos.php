<?php
session_start();
include("../conecta.php");
$id = $_SESSION["id_paciente"];

if (isset($_POST['objetos'])) {
    $objetos = $_POST['objetos'];
    
    $comando = $pdo->prepare("INSERT INTO objetos_recolhidos(objetos, id_paciente) VALUES('$objetos', $id)");
	$resultado = $comando->execute();

}
?>
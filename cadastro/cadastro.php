<?php
include("conecta.php");

$nome  = $_POST["nome"];    
$email = $_POST["email"];
$senha  = $_POST["senha"];
$telefone  = $_POST["telefone"];
$password = md5($senha);
$empregados = [];  


$comando = $pdo->prepare("INSERT INTO cadastro_bombeiro(nome, email, senha, telefone) VALUES('$nome','$email', \"$password\",'$telefone' )");
	$resultado = $comando->execute();


$resposta = 
      [
         "nome"  => $nome,
         "email" => $email,
         "senha"  => $password,
         "telefone"  => $telefone
      ];

array_push($empregados, $resposta);
// Até aqui ficaria dentro do WHILE.



$json_texto = json_encode(["empregados" => $empregados]);
echo($json_texto);  

?>
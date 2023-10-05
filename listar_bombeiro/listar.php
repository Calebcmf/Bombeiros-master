<?php
include("../conecta.php");

$comando = $pdo->prepare("SELECT `id_bombeiros`, `nome`, `email`, `telefone` FROM `bombeiros` WHERE 1;");
$resultado = $comando->execute();


// O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
// Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário

$empregados = [];  // Variável usada para guardar os dados acima no formato JSON.

$resposta = 
      [
            "id_bombeiros" => $id,
            "nome"  => $nome,
            "email" => $email,
            "telefone" => $telefone
      ];

array_push($empregados, $resposta);
// Até aqui ficaria dentro do WHILE.

// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["empregados" => $empregados]);

echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>
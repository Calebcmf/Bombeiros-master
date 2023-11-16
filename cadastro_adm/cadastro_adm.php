<?php
include("../conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$password = md5($senha);

// Verifica se o email já existe no banco de dados
$verifica = $pdo->prepare("SELECT COUNT(*) FROM cadastro_admin WHERE email = :email");
$verifica->bindParam(':email', $email);
$verifica->execute();
$emailExistente = $verifica->fetchColumn();

if ($emailExistente > 0) {
    // O email já está cadastrado, retorne uma mensagem de erro
    echo json_encode(["error" => "Email já cadastrado"]);
} else {
    // O email não está cadastrado, prossiga com o cadastro
    $comando = $pdo->prepare("INSERT INTO cadastro_admin(nome, email, senha, telefone) VALUES('$nome','$email', \"$password\",'$telefone')");
    $resultado = $comando->execute();

    if ($resultado) {
        $resposta = [
            "nome" => $nome,
            "email" => $email,
            "senha" => $password,
            "telefone" => $telefone
        ];

        echo json_encode(["empregados" => [$resposta]]);
    } else {
        // Algum erro ocorreu durante o cadastro
        echo json_encode(["error" => "Erro no cadastro"]);
    }
}
?>
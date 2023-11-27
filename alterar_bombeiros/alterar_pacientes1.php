<?php
include("../conecta.php");

$codigo = $_GET["id"];

if (isset($_POST["alterar1"])) {
    $comando = $pdo->prepare("UPDATE dados_paciente SET email='$email', senha='$password', telefone='$telefone' WHERE nome='$nome'");
    $resultado = $comando->execute();
    header("Location:../adm/adm_principal.html");
  }
  if (isset($_POST["alterar2"])) {
    $telefone = $_GET["telefone"];
    $comando = $pdo->prepare("UPDATE dados_paciente SET fone_paciente='$telefone' WHERE id_paciente='$codigo'");
    $resultado = $comando->execute();
    header("Location:../adm/adm_principal.html");
  }
  if (isset($_POST["alterar3"])) {
    $comando = $pdo->prepare("UPDATE dados_paciente SET nome='$nome', senha='$password', telefone='$telefone' WHERE email='$email'");
    $resultado = $comando->execute();
    header("Location:../adm/adm_principal.html");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../excluir_paciente/alterar-excluir_paciente.css">
    <title>Alterar Bombeiros</title>
</head>

<body>
<body>

    <img src="../img/logo_pequena.png" class="imagem">
    <div class="container">
       <h1>Alterar conta de Bombeiros:</h1>
        <form action="alterar_pacientes1.php" method="GET">
            Nome:
            <input type="text" name="nome" class="texto">
            <input type="submit" name="alterar1" value="Alterar" class="botao" data-option="alterar1"> <br><br>
            Telefone:
            <input type="text" name="telefone" class="texto">
            <input type="submit" name="alterar2" value="Alterar" class="botao" data-option="alterar2"> <br><br>
            Idade:
            <input type="text" name="idade" class="texto">
            <input type="submit" name="alterar3" value="Alterar" class="botao" data-option="alterar3"> <br><br>

        </form>
        <a href="../adm/adm_principal.html" class="voltar">Voltar</a>    
       
    </div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

</body>

</html>
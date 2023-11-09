<?php
include("conecta.php");
$nome_paciente = $_POST['nome_paciente'];
$id_paciente = $_POST['id_paciente'];
$local_ocorrencia = $_POST['local_ocorrencia'];

if (isset($_POST["listar1"])) {
    $comando = $pdo->prepare("Select * FROM dados_paciente WHERE nome_paciente = '$nome_paciente'");
    $resultado = $comando->execute();

    while ($linhas = $comando->fetch()) {
        $a = $linhas["nome_paciente"];
        $b = $linhas["cpf_paciente"];
        $c = $linhas["sexo_paciente"];
        $d = $linhas["idade_paciente"];
        $e = $linhas["fone_paciente"];
        $f = $linhas["local_ocorrencia"];
        $g = $linhas["id_paciente"];
        echo ("$a $b $c $d $e $f $g <br> <br>");
    }
}
if (isset($_POST["listar2"])) {
  $comando = $pdo->prepare("Select * FROM dados_paciente WHERE id_paciente = '$id_paciente'");
  $resultado = $comando->execute();

  while ($linhas = $comando->fetch()) {
      $a = $linhas["nome_paciente"];
      $b = $linhas["cpf_paciente"];
      $c = $linhas["sexo_paciente"];
      $d = $linhas["idade_paciente"];
      $e = $linhas["fone_paciente"];
      $f = $linhas["local_ocorrencia"];
      $g = $linhas["id_paciente"];
      echo ("$a $b $c $d $e $f $g <br> <br>");
  }
}
if (isset($_POST["listar3"])) {
  $comando = $pdo->prepare("Select * FROM dados_paciente WHERE local_ocorrencia = '$local_ocorrencia'");
  $resultado = $comando->execute();

  while ($linhas = $comando->fetch()) {
      $a = $linhas["nome_paciente"];
      $b = $linhas["cpf_paciente"];
      $c = $linhas["sexo_paciente"];
      $d = $linhas["idade_paciente"];
      $e = $linhas["fone_paciente"];
      $f = $linhas["local_ocorrencia"];
      $g = $linhas["id_paciente"];
      echo ("$a $b $c $d $e $f $g <br> <br>");
  }
}
?>
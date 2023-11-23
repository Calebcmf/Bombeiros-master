<?php
include("../conecta.php");
$nome_paciente = $_POST['nome_paciente'];
$id_paciente = $_POST['id_paciente'];
$local_ocorrencia = $_POST['local_ocorrencia'];

if (isset($_POST["listar1"])) {
    $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE nome_paciente = :nome_paciente");
    $comando->bindParam(':nome_paciente', $nome_paciente);
    $resultado = $comando->execute();
    $data = ""; 
    while ($linhas = $comando->fetch()) {

        $a = $linhas["nome_paciente"];
        $b = $linhas["cpf_paciente"];
        $c = $linhas["sexo_paciente"];
        $d = $linhas["idade_paciente"];
        $e = $linhas["fone_paciente"];
        $f = $linhas["id_paciente"];
        $g = $linhas["local_ocorrencia"];
        $h = $linhas["cep"];


        $data .= '<tr>';
        $data .= '<td>' . $a . '</td>';
        $data .= '<td>' . $b . '</td>';
        $data .= '<td>' . $c . '</td>';
        $data .= '<td>' . $d . '</td>';
        $data .= '<td>' . $e . '</td>';
        $data .= '<td>' . $f . '</td>';
        $data .= '<td>' . $g . '</td>';
        $data .= '<td>' . $h . '</td>';
        $data .= '</tr>';
        
    }
    echo $data; 
}
if (isset($_POST["listar2"])) {
  $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE id_paciente = :id_paciente");
  $comando->bindParam(':id_paciente', $id_paciente);
  $resultado = $comando->execute();
  $data = ""; 
  while ($linhas = $comando->fetch()) {

    $a = $linhas["nome_paciente"];
    $b = $linhas["cpf_paciente"];
    $c = $linhas["sexo_paciente"];
    $d = $linhas["idade_paciente"];
    $e = $linhas["fone_paciente"];
    $f = $linhas["id_paciente"];
    $g = $linhas["local_ocorrencia"];
    $h = $linhas["cep"];


    $data .= '<tr>';
    $data .= '<td>' . $a . '</td>';
    $data .= '<td>' . $b . '</td>';
    $data .= '<td>' . $c . '</td>';
    $data .= '<td>' . $d . '</td>';
    $data .= '<td>' . $e . '</td>';
    $data .= '<td>' . $f . '</td>';
    $data .= '<td>' . $g . '</td>';
    $data .= '<td>' . $h . '</td>';
    $data .= '</tr>';
      
  }
  echo $data; 
}
if (isset($_POST["listar2"])) {
  $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE local_ocorrencia = :local_ocorrencia");
  $comando->bindParam(':local_ocorrencia', $local_ocorrencia);
  $resultado = $comando->execute();
  $data = ""; 
  while ($linhas = $comando->fetch()) {

    $a = $linhas["nome_paciente"];
    $b = $linhas["cpf_paciente"];
    $c = $linhas["sexo_paciente"];
    $d = $linhas["idade_paciente"];
    $e = $linhas["fone_paciente"];
    $f = $linhas["id_paciente"];
    $g = $linhas["local_ocorrencia"];
    $h = $linhas["cep"];


    $data .= '<tr>';
    $data .= '<td>' . $a . '</td>';
    $data .= '<td>' . $b . '</td>';
    $data .= '<td>' . $c . '</td>';
    $data .= '<td>' . $d . '</td>';
    $data .= '<td>' . $e . '</td>';
    $data .= '<td>' . $f . '</td>';
    $data .= '<td>' . $g . '</td>';
    $data .= '<td>' . $h . '</td>';
    $data .= '</tr>';
      
  }
  echo $data; 
}
?>
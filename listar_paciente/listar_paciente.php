  <?php
  include("../conecta.php");
  $nome_paciente = $_POST['nome_paciente'];
  $id_paciente = $_POST['id_paciente'];
  $local_ocorrencia = $_POST['local_ocorrencia'];
  $contador = isset($_POST['contador']) ? $_POST['contador'] : null;

  $data = ""; 

  if (isset($_POST["listar1"])) {
    $contador = 1;
      $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE nome_paciente = :nome_paciente");
      $comando->bindParam(':nome_paciente', $nome_paciente);
      $resultado = $comando->execute();
    

      $rows = $comando->fetchAll(PDO::FETCH_ASSOC);
  
     
      foreach ($rows as $linhas) {
          $data .= '<tr>';
          foreach ($linhas as $valor) {
              $data .= '<td>' . $valor . '</td>';
          }
          $data .= '</tr>';
      }
  
      echo   $data  ;
  }
  $check = isset($_POST["listar4"]) && $contador > 1;
  if (isset($_POST["listar2"]) || $check) {

    
    switch ($contador) {
      case 1:
          $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE id_paciente = :id_paciente");
          break;
      case 2:
          $comando = $pdo->prepare("SELECT * FROM tipo_ocorrencia_pre_hospitalar WHERE id_paciente = :id_paciente");
          break;
      case 3:
          $comando = $pdo->prepare("SELECT * FROM observacoes_importantes WHERE id_paciente = :id_paciente");
          break;
      case 4:
          $comando = $pdo->prepare("SELECT * FROM objetos_recolhidos WHERE id_paciente = :id_paciente");
          break;
      case 5:
          $comando = $pdo->prepare("SELECT * FROM avaliacao_paciente_menor WHERE id_paciente = :id_paciente");
          break;
      case 6:
          $comando = $pdo->prepare("SELECT * FROM avaliacao_cinematica WHERE id_paciente = :id_paciente");
          break;
      case 7:
          $comando = $pdo->prepare("SELECT * FROM sinais_e_sintomas WHERE id_paciente = :id_paciente");
          break;
      case 8:
          $comando = $pdo->prepare("SELECT * FROM anamnese_emergencia_medica WHERE id_paciente = :id_paciente");
          break;
      case 9:
          $comando = $pdo->prepare("SELECT * FROM materiais_utilizados_descartaveis WHERE id_paciente = :id_paciente");
          break;
      case 10:
          $comando = $pdo->prepare("SELECT * FROM materiais_utilizados_deixados_hospital WHERE id_paciente = :id_paciente");
          break;
      case 11:
          $comando = $pdo->prepare("SELECT * FROM sinais_vitais WHERE id_paciente = :id_paciente");
          break;
      case 12:
          $comando = $pdo->prepare("SELECT * FROM forma_conducao WHERE id_paciente = :id_paciente");
          break;
      default :
          $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE id_paciente = :id_paciente");
      break;
  }

  $comando->bindParam(':id_paciente', $id_paciente);
  $resultado = $comando->execute();
    

  $rows = $comando->fetchAll(PDO::FETCH_ASSOC);

  
  foreach ($rows as $linhas) {
      $data .= '<tr>';
      foreach ($linhas as $valor) {
          $data .= '<td>' . $valor . '</td>';
      }
      $data .= '</tr>';
  }


  echo   $data  ;

  }
  if (isset($_POST["listar3"])) {
    $contador = 1;
    $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE local_ocorrencia = :local_ocorrencia");
    $comando->bindParam(':local_ocorrencia', $local_ocorrencia);
    $resultado = $comando->execute();
    
    $rows = $comando->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($rows as $linhas) {
        $data .= '<tr>';
        foreach ($linhas as $valor) {
            $data .= '<td>' . $valor . '</td>';
        }
        $data .= '</tr>';
    }

    // Display the table after the loop
    echo   $data  ;
}

?>
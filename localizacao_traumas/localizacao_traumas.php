<?php
  
  include("../conecta.php");
           
              $parte = $_POST['parteCorpo'];
        
            $parte = "indefinido";
            $fraluxent =    isset($_POST['check_1']) ? 1 : 0;
            $esviceracao =  isset($_POST['check_2']) ? 1 : 0;
            $queimadura =   isset($_POST['check_3']) ? 1 : 0;
            $ferimentos =   isset($_POST['check_4']) ? 1 : 0;
            $fabfaf =       isset($_POST['check_5']) ? 1 : 0;
            $queimadura2 =  isset($_POST['check_6']) ? 1 : 0;
            $hemorragia =   isset($_POST['check_7']) ? 1 : 0;
            $amputacao =    isset($_POST['check_8']) ? 1 : 0;
            $queimadura3 =  isset($_POST['check_9']) ? 1 : 0;

            $comando = $pdo->prepare("INSERT INTO localizacao_traumas (FraLuxEnt, Esviceracao, Queimadura1Grau, Ferimentos, FABFAF, Queimadura2Grau, Hemarrogia, Amputacao, Queimadura3Grau,Parte) VALUES ('$fraluxent', '$esviceracao', '$queimadura', '$ferimentos', '$fabfaf', '$queimadura2', '$hemorragia', '$amputacao', '$queimadura3','$parte')");
            $resultado = $comando->execute();
            echo("teste");
    
  
?>  
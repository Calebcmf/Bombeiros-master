<?php
        include_once("conecta.php");
        
        $comando = $pdo->prepare("SELECT * FROM dados_paciente;");
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_paciente = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>
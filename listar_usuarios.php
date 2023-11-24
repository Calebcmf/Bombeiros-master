<?php
        include_once("conecta.php");
        
        $comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro;");
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_bombeiros = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>
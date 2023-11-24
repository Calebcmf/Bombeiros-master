<?php
        include_once("conecta.php");
        
        $comando = $pdo->prepare("SELECT * FROM cadastro_admin;");
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_admin = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>
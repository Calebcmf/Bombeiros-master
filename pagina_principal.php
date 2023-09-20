<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="pagina_principal.css">
</head>
<body>
    <div class="menu">
        <a class="opition" href="#dados_paciente">Dados do Paciente</a>
        <a class="opition" href="#tipo_ocorrencia">Tipo de Ocorrência</a>
        <a class="opition" href="#localizacao_traumas">Localização Traumas</a>
        <a class="opition" href="#observacoes">Observações Importantes</a>
        <a class="opition" href="#nivel_consciencia">Nível de Consciencia</a>
    </div>
    
    <div class="principal">
        <div class="pagina" id="dados_paciente">
            <?php 
                include("dados_paciente.html");
            ?>
        </div>
        <div class="pagina" id="tipo_ocorrencia">
            <?php 
                include("tipo_ocorrencia.html");
            ?>
        </div>
        <div class="pagina" id="localizacao_traumas">
            <?php 
                include("localizacao_traumas.php");
            ?>
        </div>
        <div class="pagina" id="observacoes">
            <?php 
                include("observacoes.html");
            ?>
        </div>
        <div class="pagina" id="nivel_consciencia">
            <?php 
                include("nivel_consciencia.html");
            ?>
        </div>
        <div class="pagina"></div>
    </div>
    
 
</body>

</html>
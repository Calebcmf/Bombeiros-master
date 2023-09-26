<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="pagina_principal.css">
    <script src="pagina_principal.js"></script>
</head>
<body>
    <div class="menu">
        <div class="pop-up_faleconosco" id="container_faleconosco">
            <h1>Fale Conosco</h1>
            <form class="form_faleconosco" action="duvidas.php" method="post">
                Nome
                <input type="text" class="caixa_texto" id="nome" name="nome" placeholder="Seu nome" required><br>
                
                Email
                <input type="email" class="caixa_texto" id="email" name="email" placeholder="Seu email" required><br>

                Mensagem
                <textarea id="mensagem" class="msg" name="mensagem" onkeypress="return searchKeyPress(event)" placeholder="Digite sua mensagem" required></textarea>
                
                <div class="botoes">
                    <button onclick="Esconder();" class="fechar">Fechar</button>
                    <input type="submit" value="Enviar" name="enviar" class="enviar">   
                </div>
            </form>
           
        </div>
        <div class="logos">
            <img src="img/logo_medicina.png" width="40%">
            <img src="img/logo_pequena.png" width="40%">
        </div>
        <div class="opcoes">
            <a class="opition" href="#dados_paciente">Dados do Paciente</a>
            <a class="opition" href="#tipo_ocorrencia">Tipo de Ocorrência</a>
            <a class="opition" href="#localizacao_traumas">Localização Traumas</a>
            <a class="opition" href="#observacoes">Observações Importantes</a>
            <a class="opition" href="#nivel_consciencia">Nível de Consciencia</a>
        </div>
        <div class="rodape_menu">
            <div class="fale_conosco" onclick="Aparecer();">Fale Conosco</div>
            <div class="ajuda">Ajuda</div>
            <a class="suporte" href="">Suporte</a>
        </div>
    </div>

    <div class="principal">
        <div class="pagina" id="dados_paciente">
            <?php 
                include("dados_paciente.html");
            ?>
        </div>
        <br><br>
        <div class="pagina" id="tipo_ocorrencia">
            <?php 
                include("tipo_ocorrencia.html");
            ?>
        </div>
        <br><br>
        <div class="pagina" id="localizacao_traumas">
            <?php 
                include("localizacao_traumas.php");
            ?>
        </div>
        <br><br>
        <div class="pagina" id="observacoes">
            <?php 
                include("observacoes.html");
            ?>
        </div>
        <br><br>
        <div class="pagina" id="nivel_consciencia">
            <?php 
                include("nivel_consciencia.html");
            ?>
        </div>
        <div class="pagina"></div>
    </div>
    
 
</body>

</html>
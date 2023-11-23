<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Scripts/jquery-3.7.0.min.js"></script>
    <title>Página Principal</title>
    <link rel="stylesheet" href="pagina_principal.css">
    <script src="../pagina_principal/pagina_principal.js"></script>
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
                    <button onclick="Esconder();" class="fechar_popup">Fechar</button>
                    <input type="submit" value="Enviar" name="enviar" class="enviar">   
                </div>
            </form>
        </div>
        <div class="fundo_popup-escuro" id="fundo_popup-escuro">
        </div>
        <div class="logos">
            <img src="../img/logo_medicina.png" class="imagem_logo">
            <img src="../img/logo_pequena.png" class="imagem_logo">
        </div>
        <div class="opcoes">
            <a class="opition" onclick="mostrarTela(1)">Dados do Paciente</a>
            <a class="opition" onclick="mostrarTela(2)">Tipo de Ocorrência</a>
            <a class="opition" onclick="mostrarTela(3)">Localização Traumas</a>
            <a class="opition" onclick="mostrarTela(4)">Observações Importantes</a>
            <a class="opition" onclick="mostrarTela(5)">Nível de Consciência</a>
            <a class="opition" onclick="mostrarTela(6)">Imagem da Ocorrência</a>
            <a class="opition" onclick="mostrarTela(7)">Objetos Recolhidos</a>
            <a class="opition" onclick="mostrarTela(8)">Avaliação da Cinemática</a>
            <a class="opition" onclick="mostrarTela(9)">Sinais e Sintomas</a>
            <a class="opition" onclick="mostrarTela(10)">Anamnese de Emergência</a>
            <a class="opition" onclick="mostrarTela(11)"id="menu_anamnese" style="display: none;">Anamnese Gestacional</a>
            <a class="opition" onclick="mostrarTela(12)">Materiais Utilizados</a>
            <a class="opition" onclick="mostrarTela(13)">Sinais Vitais</a>
            <a class="opition" onclick="mostrarTela(14)">Forma de Condução</a>
        </div>
        <div class="rodape_menu">
            <div class="ajuda" href="https://drive.google.com/file/d/1InkeVS7bkLO14Tya5JILE7_YbtGm3fFH/view">Ajuda</div>
        </div>
    </div>

    <div class="principal" id = principal>
   
        <div class="pagina1" id="1">
            <?php 
                include("../dados_paciente/dados_paciente.html");
            ?>
        </div>
     
        <div class="pagina2" id="2">
            <?php 
                include("../tipo_ocorrencia/tipo_ocorrencia.html");
            ?>
        </div>
        
        <div class="pagina3" id="3">
            <?php 
                include("../localizacao_traumas/localizacao_traumas.html");
            ?>
        </div>
        
        <div class="pagina4" id="4">
            <?php 
                include("../observacoes/observacoes.html");
            ?>
        </div>
        
        <div class="pagina5" id="5">
            <?php 
                include("../nivel_consciencia/nivel_consciencia.html");
            ?>
        </div>
        <div class="pagina6" id="6">
            <?php 
                include("../salvar_imagem/salvar_imagem.html")
            ?>
        </div>
        <div class="pagina7" id="7">
            <?php
                include("../objetos_recolhidos/objetos_recolhidos.html")
            ?>
        </div>
        <div class="pagina8" id="8">
            <?php
                include("../avaliacao_cinematica/avaliacao_cinematica.html")
            ?>
        </div>
        <div class="pagina9" id="9">
            <?php
                include("../sinais_sintomas/sinais_sintomas.html")
            ?>
        </div>
        <div class="pagina10" id="10">
            <?php
                include("../anamnese_emergencia/anamnese_emergencia.html")
            ?>
        </div>
        <div class="pagina11" id="11">
            <?php
               
            ?>
        </div>
        <div class="pagina12" id="12">
            <?php
                include("../materiais_utilizados/materiais_utlizados.html")
            ?>
        </div>
        <div class="pagina13" id="13">
            <?php
                include("../sinais_vitais/sinais_vitais.html")
            ?>
        </div>
        <div class="pagina14" id="14">
            <?php
                include("../forma_conducao/forma_conducao.html")
            ?>
        </div>
        <!-- <div class="btns">
            <div onclick="MostrarAnteriorPagina()" class="btn"><</div>
            <div onclick="MostrarProximaPagina()"  class="btn">></div>
        </div> -->
       
    
    </div>
    
</body>

</html>
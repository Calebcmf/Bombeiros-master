<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../localizacao_traumas/localizacao_traumas.css">
   
</head>
<body>
    
    <div class="cabecalho">
        <div class="titulo">
            Localizacao 
        </div>
        <div class="subtitulo">
            dos Traumas
        </div>
    </div>
    
    <div class="mapa">
    <div class="container">
            <img src="img/body.png" alt="" width= 100%>
            <div class="cabeca"   id="01" onclick="criar(1,'Cabeça')"></div>
            <div class="pescoco"  id="02" onclick="criar(1,'Pescoço')"></div>
            <div class="ombroD"   id="03" onclick="criar(1,'Ombro Direito')"></div>
            <div class="ombroE"   id="04" onclick="criar(1,'Ombro Esquerdo')"></div>
            <div class="bracoE"   id="05" onclick="criar(1,'Braço Esquerdo')"></div>
            <div class="bracoD"   id="06" onclick="criar(1,'Braço Direito')"></div>
            <div class="peito"    id="07" onclick="criar(1,'Peito')"></div>
            <div class="barriga"  id="08" onclick="criar(1,'Barriga')"></div>
            <div class="bingulin" id="09" onclick="criar(1,'Pélvis')"></div>
            <div class="pernaD"   id="10" onclick="criar(1,'Perna Direita')"></div>
            <div class="pernaE"   id="11" onclick="criar(1,'Perna Esquerda')"></div>
        </div>
    </div>

    <div class="mapa tras">
    <div class="container">
            <img src="img/bodyTras.png" alt="" width= 100%>
            <div class="cabeca"   id="01" onclick="criar(1,'Cabeça')"></div>
            <div class="pescoco"  id="02" onclick="criar(1,'Pescoço')"></div>
            <div class="ombroD"   id="03" onclick="criar(1,'Ombro Direito')"></div>
            <div class="ombroE"   id="04" onclick="criar(1,'Ombro Esquerdo')"></div>
            <div class="bracoE"   id="05" onclick="criar(1,'Braço Esquerdo')"></div>
            <div class="bracoD"   id="06" onclick="criar(1,'Braço Direito')"></div>
            <div class="peito"    id="07" onclick="criar(1,'Peito')"></div>
            <div class="barriga"  id="08" onclick="criar(1,'Barriga')"></div>
            <div class="bingulin" id="09" onclick="criar(1,'Pélvis')"></div>
            <div class="pernaD"   id="10" onclick="criar(1,'Perna Direita')"></div>
            <div class="pernaE"   id="11" onclick="criar(1,'Perna Esquerda')"></div>
        </div>
    </div>
    

    
    <form class="popUP" id="1">
    
            <div class="m">
                <div class="fechar" onclick="fechar(1)">X</div>
                <img src="img/Cabeca.png" height="60%" id="im" alt=""></img>
                <p id="mtd" >Cabeça<p>
            </div>
        <div class="m m1">
            <div class="tri">
                <div class="escolha">
                    <input type="checkbox" id="check_1" class = "tra">
                    <label for="check_1">FRA/LUX/ENT</label>    
                </div>
                
                <div class="escolha">
                    <input type="checkbox" id="check_2" class = "tra">
                    <label for="check_2">ESVICERAÇÃO</label>  
                </div>
                
                <div class="escolha">
                    <input type="checkbox" id="check_3" class = "tra">
                    <label for="check_3">QUEIMADURA</label>  
                </div>
            </div>

            <div class="tri">
                <div class="escolha">
                    <input type="checkbox" id="check_4" class = "tra">
                    <label for="check_4">FERIMENTOS</label>  
                </div>

                <div class="escolha">
                    <input type="checkbox" id="check_5" class = "tra">
                    <label for="check_5">F.A.B/F.A.F</label> 
                </div>

                <div class="escolha">
                    <input type="checkbox" id="check_6" class = "tra">
                    <label for="check_6">QUEIMADURA</label>
                </div>
            </div>

            <div class="tri">
                <div class="escolha">
                    <input type="checkbox" id="check_7" class = "tra">
                    <label for="check_7">HEMARROGIA</label>
                </div>
                
                <div class="escolha">
                    <input type="checkbox" id="check_8" class = "tra">
                    <label for="check_8">AMPTUÇÃO</label>
                </div>
                
                <div class="escolha">
                    <input type="checkbox" id="check_9" class = "tra">
                    <label for="check_9">QUEIMADURA</label>
                </div>
            </div>
        </div> 
        
        <input type="submit" value="Enviar" name="entrarR" class="btnF">

        
    </form> 
    
    <div class="mudarC">
        <div class="opcC">FRENTE</div>
        <div class="opcC t">ATRÁS</div>
    </div>

        
   
</body>
    <script src="localizacao_traumas.js"> </script>
</html>
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
            <div class="d1">
                <div class="d2">
                    <img src="../img/cabeca.png" class="cabeca h" onclick="criar(1,'Cabeca')">
                </div>
                <div class="d2 c">
                <img src="../img/pescoco.png"       class="pescoco h " onclick="criar(1,'Pescoco')">   </img>
                </div>
            </div>
            <div class="d1 r">
                <div class="d3 b">
                <img src="../img/bicepsdir.png"     class="bicepsD h " onclick="criar(1,'bicepsdir')">   </img>   
                </div>
                <div class="d3">
                <img src="../img/tricepsdir.png"    class="tricepsD h" onclick="criar(1,'tricepsdir')">  </img>
                </div>
                <div class="d3">
                <img src="../img/peitodir.png"      class="peitoD h " onclick="criar(1,'peitodir')">    </img>
                </div>
                <div class="d3">
                <img src="../img/peitoesq.png"      class="peitoE h " onclick="criar(1,'peitoesq')">    </img>
                </div>
                <div class="d3">
                <img src="../img/tricepsesq.png"    class="tricepsE h"onclick="criar(1,'tricepsesq')">  </img> 
                </div>
                <div class="d3 b">
                <img src="../img/bicepsesq.png"     class="bicepsE h"onclick="criar(1,'bicepsdir')">   </img> 
                </div>
            </div>
            <div class="d1 r r2">
            <div class="d3 q">
                <img src="../img/MaoDir.png"    class="maoD h " onclick="criar(1,'MaoDir')">  </img>
            </div>
                <div class="d3"></div>
                <div class="d3">
                    <img src="../img/barrigadir.png"    class="barrigaD h " onclick="criar(1,'barrigadir')">  </img>
                </div>
                <div class="d3">
                <img src="../img/barrigaesq.png"    class="barrigaE h " onclick="criar(1,'barrigaesq')">  </img>
                </div>
                <div class="d3"></div>
            <div class="d3 q ">
                <img src="../img/MaoEsq.png"    class="maoE h " onclick="criar(1,'maoesq')">  </img>
            </div>
            </div>
            <div class="d1 cx">
                <div class="d2 c">
                <img src="../img/pelvis.png"        class="pelvis h " onclick="criar(1,'pelvis')" >    </img>
                </div>
                <div class="d2 s">
                <div class="d3 v ">
                <img src="../img/coxaesq.png"       class="coxaE h " onclick="criar(1,'coxaesq')" >     </img>
                </div>
                <div class="d3 v ">
                <img src="../img/coxadir.png"       class="coxaD h "  onclick="criar(1,'coxadir')">     </img>
                </div>
                </div>
            </div>
            <div class="d1 r">
                <div class="d4">
                <img src="../img/pernaesq.png" class="pernaE h "   onclick="criar(1,'pernaesq')"> </img>
                </div>
                <div class="d4">
                <img src="../img/pernadir.png"class="pernaD h "  onclick="criar(1,'pernadir')" >     </img>
                </div>
            </div>

            <div class="d1">
                <div class="d2 f">
                   
                </div>
                <div class="d2">
                <div class="d4 s">
                    <img src="../img/pedir.png"         class="peD h "     onclick="criar(1,'pedir')">       </img>
                    </div>
                    <div class="d4 s ">
                    <img src="../img/peesq.png"         class="peE h"     onclick="criar(1,'peesq')">       </img> 
                    </div>
                </div>
            </div>
            
        </div>  
    </div>

    
    

    
    <form class="popUP" id="1">
    
            <div class="m">
                <div class="fechar" onclick="fechar(1)">X</div>
                <div class="quadI">
                    <img src="../img/Cabeca.png" width  ="50%" height="auto" id="im" alt=""></img>
                </div>
                
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
    <script src="../localizacao_traumas/localizacao_traumas.js"> </script>
</html>
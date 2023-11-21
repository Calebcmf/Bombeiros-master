function abrir(id){
    
    var m = document.getElementById(1);
    var m2 = document.getElementById(2);
    var c = document.getElementById("cabecalho");
    
    if(id == 1){
        m.style.display = "flex"
        m2.style.display = "none"
        c.innerHTML = "CADASTRO";
    } else {
        m.style.display = "none"
        m2.style.display = "flex"
        c.innerHTML = "LISTAR";
    }
  
    
}
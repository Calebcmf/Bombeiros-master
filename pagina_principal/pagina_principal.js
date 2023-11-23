function Aparecer() {
    var container = document.getElementById("container_faleconosco");
    var fundo = document.getElementById("fundo_popup-escuro");

    container.style.display = "flex";
    fundo.style.display = "flex";
}
function Esconder() {
    var container = document.getElementById("container_faleconosco");
    var fundo = document.getElementById("fundo_popup-escuro");

    container.style.display = "none";
    fundo.style.display = "none";
}

function AnamnseFuncao() {
    var generoSelecionado = document.querySelector("input[name='sexo']:checked");

    if (generoSelecionado) {
        var genero = generoSelecionado.value;
        var anamnese = document.getElementById("anamnese_gestacional");
        var menu = document.getElementById("menu_anamnese");
        console.log(genero.value)
        if (genero == 'feminino') {
            anamnese.style.display = "flex";
            menu.style.display = "flex";
        } else {
            anamnese.style.display = "none";
            menu.style.display = "none";
        }
    }
}

let currentPage = 1; // Variable to track the current page

function mostrarTela(id){
    document.getElementById(currentPage).style.display = "none";
   
    currentPage = id;
    document.getElementById(currentPage).style.display = "flex";
    console.log(currentPage);
    if (currentPage === 10 || currentPage === 11) {
        document.body.style.height = "150vh";
    }



}

function MostrarProximaPagina() {
    
    document.getElementById(currentPage).style.display = "none";
    currentPage ++;
    document.getElementById(currentPage).style.display = "flex";
  
      
    
}

function VoltarTudo() {
 
    document.getElementById(14).style.display = "none";
    document.getElementById(1).style.display = "flex";
    
    

}


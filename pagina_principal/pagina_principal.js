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

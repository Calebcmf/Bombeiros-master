
function abrir(id,nome) {
    var c = document.getElementById("cabecalho");
    c.innerHTML = nome;

    for (let i = 1; i <= 4; i++) {
        var div = document.getElementById(i);
        if (i === id) {
            div.style.display = "flex"; 
        } else {
            div.style.display = "none"; 
        }
    }
}




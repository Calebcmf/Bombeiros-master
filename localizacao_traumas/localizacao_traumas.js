function criar(i, url) {
    var a = document.getElementById(i);
    var imagem =  document.getElementById('im');
    var metade = document.getElementById('mtd');
    a.style.display = 'flex'; 
    imagem.src=`../img/${url}.png`;
    metade.innerHTML = "";
    metade.innerHTML = url;


}

function fechar(i) {
    var a = document.getElementById(i);
    a.style.display = 'none'; // Hide the div when closing
}


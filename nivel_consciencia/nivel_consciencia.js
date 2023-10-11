function Mudar_Idade() {
    var idade = document.getElementById("idade");
    var valor = idade.value;

    if (valor > 5) {
        document.getElementById("idade_info").innerHTML = "Maior que 5 anos";
        document.getElementsByName('format3')[0].options[1].innerHTML = "Orientado";
        document.getElementsByName('format3')[0].options[2].innerHTML = "Confuso";
        document.getElementsByName('format3')[0].options[3].innerHTML = "Palavras Confusas";
        document.getElementsByName('format3')[0].options[4].innerHTML = "Palavras Incompreensíveis";

        document.getElementsByName('format4')[0].options[1].innerHTML = "Obedece Comandos";
        document.getElementsByName('format4')[0].options[2].innerHTML = "Localiza Dor";
        document.getElementsByName('format4')[0].options[3].innerHTML = "Movimento de Retirada";
        document.getElementsByName('format4')[0].options[4].innerHTML = "Flexão Anormal";
        document.getElementsByName('format4')[0].options[5].innerHTML = "Extensão Anormal";
    } else {
        document.getElementById("idade_info").innerHTML = "Menor que 5 anos";
        document.getElementsByName('format3')[0].options[1].innerHTML = "Palavras e Frases Apropriadas";
        document.getElementsByName('format3')[0].options[2].innerHTML = "Palavras Inapropriadas";
        document.getElementsByName('format3')[0].options[3].innerHTML = "Choro Persistente ou Gritos";
        document.getElementsByName('format3')[0].options[4].innerHTML = "Sons Incompreensíveis";

        document.getElementsByName('format4')[0].options[1].innerHTML = "Obedece Prontamente";
        document.getElementsByName('format4')[0].options[2].innerHTML = "Localiza Dor ou Estímulo Tátil";
        document.getElementsByName('format4')[0].options[3].innerHTML = "Retirada do Segmento Estimulado";
        document.getElementsByName('format4')[0].options[4].innerHTML = "Flexão Anormal (Decortificação)";
        document.getElementsByName('format4')[0].options[5].innerHTML = "Extensão Anormal (Decerebração)";
    }
}
const imagem = document.getElementById("imagem");
const previewImage = document.getElementById("previewImage");

imagem.addEventListener("change", function () {
    const file = imagem.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previewImage.src = e.target.result;
        };

        reader.readAsDataURL(file);
    } else {
        // Limpar a pré-visualização se nenhum arquivo for selecionado
        previewImage.src = "";
    }
});
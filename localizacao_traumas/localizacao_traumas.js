var parte;

function criar(i, url) {
  var a = document.getElementById('form1');
  var imagem = document.getElementById('im');
  var metade = document.getElementById('mtd');
  a.style.display = 'flex';
  imagem.src = `../img/${url}.png`;
  metade.innerHTML = "";
  metade.innerHTML = url;
  parte = url;

}


$(document).ready(function () {
  $('#form1').submit(function (e) {
    e.preventDefault(); // Prevent the default form submission
    var formData = $(this).serialize();

    if (parte) {
      formData += '&parteCorpo=' + parte; // Add the parte variable to the form data
    }

    $.ajax({
      type: 'POST',
      url: '../localizacao_traumas/localizacao_traumas.php',
      data: formData,
      success: function (response) {
        alert("Deu Certo :)");
      }
    });
  });
});


function fechar(i) {
  var a = document.getElementById('form1');
  a.style.display = 'none'; // Hide the div when closing
}
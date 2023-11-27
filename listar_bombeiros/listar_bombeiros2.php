<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../listar_paciente/listar_paciente.css">
    <title>Listar Bombeiros</title>
</head>

<body>
<body>

    <img src="../img/logo_pequena.png" class="imagem">
    <div class="container">
        <h1>Listar conta de Bombeiros:</h1>
        <form id="myForm">
            Listar pelo nome:
            <input type="text" name="nome" class="texto">
            <input type="button" value="Listar" class="botao" data-option="listar1"> <br><br>
            Listar pelo email:
            <input type="text" name="email" class="texto">
            <input type="button" value="Listar" class="botao" data-option="listar2"> <br><br>
            Listar pelo telefone:
            <input type="text" name="telefone" class="texto">
            <input type="button" value="Listar" class="botao" data-option="listar3"> <br><br>
        </form>
        <a href="listar_todos_bombeiros.php" class="listar">Listar todos Pacientes</a> <br><br>
        <a href="../adm/adm_principal.html" class="voltar">Voltar</a>
        
    </div>
    <div class="container cont2">
        <div id="result" class="resultado">
          
            
        </div>
        
    </div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function () {
    $('input[type="button"]').click(function () {
        var option = $(this).data('option');
        var formData = $('#myForm').serialize() + '&' + option + '=true';

        $.ajax({
            type: 'POST',
            url: '../listar_bombeiros/listar_bombeiros.php',
            data: formData,
            success: function (response) {
            // Construct a table structure with received data
            var tableContent = '<table class="resultado"><tr><th>Código</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th></tr>';
            tableContent += response; // Append the received data (table rows)

            tableContent += '</table>';

            // Replace the content of the result div with the created table
            $('#result').html(tableContent);
}
        });
    });
});
</script>

</body>

</html>
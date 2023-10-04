function Listar() {
    var dados = $('#form1').serialize();

    $.ajax({
        type: "POST",
        url: "cadastro.php",
        data: dados,
        dataType: 'json',
        success: function (meu_json) {
            var valores = meu_json;
            var lista = valores.empregados;

            for (x = 0; x < lista.length; x++) {
                console.log(lista[x].nome);
                console.log(lista[x].email);
                console.log(lista[x].senha);
                console.log(lista[x].telefone);
            }

            // Exibir a mensagem de cadastro concluído
            $('#mensagem').text('Cadastro concluído!');
            $('#mensagem').show();

            // Limpar o formulário após o sucesso
            $('#form1')[0].reset();
        },
        error: function (xhr, status, error) {
            console.error('Ocorreu um erro ao enviar os dados: ' + error);
        },
        beforeSend: function (xhr) {
            // Faz algo antes do envio, como exibir uma animação por exemplo.
        },
        complete: function (xhr, status) {
            // Faz algo após a conclusão, como ocultar uma animação por exemplo.
        },
        timeout: 5000
    });
}
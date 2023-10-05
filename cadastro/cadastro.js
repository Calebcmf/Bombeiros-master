function Listar() {
    var dados = $('#form1').serialize();

    $.ajax({
        type: "POST",
        url: "cadastro.php",
        data: dados,
        dataType: 'json',
        success: function (meu_json) {

            // Exibir a mensagem de cadastro concluído
            $('#mensagem').text('Cadastro concluído!');
            $('#mensagem').show();

            // Limpar o formulário após o sucesso
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
function getConteudo() {

    var ids = new Array();
    $("#destino").children().each(function(){
        ids.push(this.title);
    });

    return ids;
}

function verifica() {

    if ($('#destino').children().length == 0) {
        alert("Por favor, selecione uma opção antes de ir para a próxima pergunta");
    } else {
        $("#answers").val(getConteudo());
        $("#formAnswers").submit();
    }
}

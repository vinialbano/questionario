function getConteudo() {

    var ids = new Array();

    $("#destino").children().each(function(){
        ids.push($(this).data("id"));
    });

    return ids;
}

function verifica() {

    if ($('#destino').children().length == 0) {
        $("#errors").append("<div class=\"alert alert-danger\"><strong>Aviso!</strong> Você precisa selecionar uma resposta antes de prosseguir!</div>");
    } else {
        $("#answers").val(getConteudo());
        $("#formAnswers").submit();
    }
}

function trocaPadding(){
    if($("#origem").children().length == 0){
        $('#origem').css("padding", "20px 0");
    } else {
        $('#origem').css("padding", "0");
    }

    if($("#destino").children().length == 0){
        $('#destino').css("padding", "20px 0");
    } else {
        $('#destino').css("padding", "0");
    }
}

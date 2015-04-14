<div class="container">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Adicionar Nova Opção
                    </h3>
                    </div><!-- /.box-header -->
            <div class="panel-body">
                {{ Form::text('text', '', array('class' => 'form-control', 'id' => 'opcao')) }}
                {{ Form::token() }}
            </div>
            <div class="panel-footer">

                <button type="button" class="btn btn-primary item-add"><span class="fa fa-check"></span> Salvar</button>
                <button type="button" class="btn btn-danger modal-close"><span class="fa fa-times"></span> Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready( function(){
    $('.item-add').on('click', function(e) {
        e.preventDefault;

        $.post(
            "{{{ URL::route('alternatives.firstOrNew') }}}",
            {
                "text": $('#opcao').val(),
                "_token": $('input[name=_token]').val()
            },
            function(data){
                parent.$('#origem').append('<div class="list-group-item" data-id=' + data.id + '>' + data.text + '</div>');
                parent.trocaPadding();
                parent.$.magnificPopup.close();
            }
        );

    });
    $('.modal-close').on('click', function(e) {
        e.preventDefault();
        parent.trocaPadding();
        parent.$.magnificPopup.close();

    });
});
</script>

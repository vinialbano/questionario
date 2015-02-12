<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                Adicionar Nova Opção
            </h3>
        </div><!-- /.box-header -->
        <div class="panel-body">
            {{ Form::text('text', '', array('class' => 'form-control', 'id' => 'opcao')) }}
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-primary item-add"><span class="fa fa-check"></span> Salvar</button>
            <button type="button" class="btn btn-danger modal-close"><span class="fa fa-times"></span> Cancelar</button>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready( function(){
    $('.item-add').on('click', function(e) {
        e.preventDefault;
        parent.$('#origem').append('<a class="list-group-item">' + $('#opcao').val() +'</a>');
        parent.$.magnificPopup.close();
    });
    $('.modal-close').on('click', function(e) {
        e.preventDefault();
        parent.$.magnificPopup.close();
    });
});
</script>

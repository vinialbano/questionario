<div class="container">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">
                {{ $title }}
            </h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{ Form::open(array('route' => array('admin.questions.update' , $question->id ) , 'method' => 'put')) }}
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('text', 'Enunciado da Questão') }}
                {{ Form::textArea('text', $question->text, array('class' => 'form-control', 'rows' => '2')) }}
            </div>
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('multianswer', 'Múltiplas Respostas', $question->multianswer) }} Múltiplas Respostas
                </label>
            </div>
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('allow_other', 'Permite Outros', $question->allow_other )}} Permite Outros
                </label>
            </div>
            <div class="form-group">
                {{ Form::label('other_text', 'Texto do botão Outros') }}
                {{ Form::text('other_text', $question->other_text, array('class' => 'form-control')) }}
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span> Salvar</button>
            <button type="button" class="btn btn-danger modal-close"><span class="fa fa-times"></span> Cancelar</button>
        </div>
        {{ Form::close() }}
    </div>
</div>

<script type="text/javascript">
$(document).ready( function(){
    $('.modal-close').on('click', function(e) {
        e.preventDefault();
        parent.$.magnificPopup.close();
    });
});
</script>

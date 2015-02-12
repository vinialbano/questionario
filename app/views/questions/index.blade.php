@extends('layouts.admin.master')

{{-- Page Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-question"></i>
        <h3 class="box-title">Questões</h3>
    </div>
    <div class="box-body table-responsive">
        <table id="questions" class="table table-striped table-hover table-bordered">
            <thead>
                <tr role="row">
                    <th class="col-md-1">{{{ Lang::get('admin/questions/table.id') }}}</th>
                    <th class="col-md-3">{{{ Lang::get('admin/questions/table.text') }}}</th>
                    <th class="col-md-3">{{{ Lang::get('admin/questions/table.display_text') }}}</th>
                    <th class="col-md-1">{{{ Lang::get('admin/questions/table.multianswer') }}}</th>
                    <th class="col-md-1">{{{ Lang::get('admin/questions/table.allow_other') }}}</th>
                    <th class="col-md-2">{{{ Lang::get('admin/questions/table.other_text') }}}</th>
                    <th class="col-md-1">{{{ Lang::get('table.actions') }}}</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@stop






{{-- Scripts --}}
@section('scripts')
<script type="text/javascript">
var table;
$(document).ready(function() {

    //Datatables
    table = $('#questions').dataTable( {
        "dom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
        "processing": true,
        "serverSide": true,
        "ajax": "{{{ URL::route('admin.questions.data') }}}",
        "drawCallback": function ( settings ) {
            //Magnific Popup
            $('.ajax-popup-link').magnificPopup({
                type: 'ajax',
                modal: 'true'

                // other options
            });
        }
    });
});
</script>
@stop
